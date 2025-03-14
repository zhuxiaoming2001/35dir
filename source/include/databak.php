<?php
class DataBak {
	public $db_host; //数据库主机
	public $db_user; //数据库用户名
	public $db_pass; //数据库密码
	public $db_name; //数据库名称
	public $datadir; //备份文件存放的路径
	protected $transfer = ''; //临时存放sql[切勿不要对该属性赋值，否则会生成错误的sql语句]
	
	//$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
	
	public function __construct($db_host, $db_user, $db_pass, $db_name, $charset = 'utf8') {		
		$this->connect($db_host, $db_user, $db_pass, $db_name, $charset);//连接数据
		$this->datadir = ROOT_PATH.'data/dbbak/';
	}

	/**
	 *数据库连接
	 *@param string $host 数据库主机名
	 *@param string $user 用户名
	 *@param string $pwd  密码
	 *@param string $db   选择数据库名
	 *@param string $charset 编码方式
	 */
	public function connect($db_host, $db_user, $db_pass, $db_name, $charset = 'utf8') {
		$this->db_host = $db_host;
		$this->db_user = $db_user;
		$this->db_pass = $db_pass;
		$this->db_name = $db_name;
		$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
		if (!$conn) {
			$this->error('无法连接数据库服务器！');
			return false;
		}
		$this->conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
		//mysqli_select_db($this->db_name) or $this->error('选择数据库失败！');
		//mysqli_query("set names $charset");
		return true;
	}
	
	/**
	 *列表数据库中的表
	 *@param  database $database 要操作的数据库名
	 *@return array    $dbArray  所列表的数据库表
	 */
	public function get_tables($database = '') {
	    $conn = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
		$database = empty($database) ? $this->db_name : $database;
		$result = mysqli_query($conn,"SHOW TABLES FROM `$database`") or die(mysqli_error());
		$dbarr = array();
		while ($tmparr = mysqli_fetch_row($result)){
			 $dbarr[] = $tmparr[0];
		}
		return $dbarr;	
	}
	
	/**
	 *生成sql文件，导出数据库
	 *@param string $sql sql语句
	 *@param number $volsize 分卷大小，以KB为单位，为0表示不分卷
	 */
	public function export_sql($table = '', $volsize = 0) {
		$table = empty($table) ? $this->get_tables() : $table;
     	if(!$this->check_dir($this->datadir)) {
			$this->error('您没有权限操作目录，备份失败！');
			return false;
		}
		
     	if ($volsize == 0) {
			if (!is_array($table)) {
				$this->setsql($table, 0, $this->transfer);
			} else {
				for ($i = 0; $i < count($table); $i++) {
					$this->setsql($table[$i], 0, $this->transfer);
				}
			}
     		$filename = $this->datadir.date("Ymd", time()).'_all.sql.php';
     		if (!$this->write_sql($filename, $this->transfer)) {
				return false;
			}
     	} else {
     		if (!is_array($table)) {
				$sqlarr = $this->setsql($table, $volsize, $this->transfer);
				$sqlarr[] = $this->transfer;
			} else {
				$sqlarr = array();
				for ($i = 0; $i < count($table); $i++) {
					$tmparr = $this->setsql($table[$i], $volsize, $this->transfer);
					$sqlarr = array_merge($sqlarr, $tmparr);
				}
				$sqlarr[] = $this->transfer;
			}
			
     		for ($i = 0; $i < count($sqlarr); $i++) {
     			$filename = $this->datadir.date("Ymd", time()).'_part'.$i.'.sql.php';
     			if (!$this->write_sql($filename, $sqlarr[$i])) {
					return false;
				}
     		}
     	}
     	return true;
    }
	
	/*
	 *载入sql文件，恢复数据库
	 *@param diretory $dir
	 *@return booln
	 *注意:请不在目录下面存放其它文件和目录，以节省恢复时间
	*/
	public function import_sql($dir = '') {
		if (is_file($dir)) {
			return $this->import_sqlfile($dir);
		}
		
		$dir = empty($dir) ? $this->datadir : $dir;
		if ($link = opendir($dir)) {
			$filearr = scandir($dir);
			$pattern = "/_part[0-9]+.sql.php$|_all.sql.php$/";
			$num = count($filearr);
			for ($i = 0; $i < $num; $i++) {
				if (preg_match($pattern, $filearr[$i])) {
					if (false == $this->import_sqlfile($dir.$filearr[$i])) {
						return false;
					}
				}
			}
			return true;
		}
    }
	
	//执行sql文件，恢复数据库
	public function import_sqlfile($filename = '')	{
		$sqls = file_get_contents($filename);
		$sqls = substr($sqls, 13);
		$sqls = explode("\n", $sqls);
		if (empty($sqls)) return false;
		
		foreach ($sqls as $sql)	{
			if (empty($sql)) continue;
			if (!mysqli_query($this->conn,trim($sql))) {
				$this->error('恢复失败：'.mysqli_error());
				return false;
			}
		}
		return true;
    }
	
	/**
	 * 生成sql语句
	 * @param   $table     要备份的表
	 * @return  $tabledump 生成的sql语句
	 */
	protected function setsql($table, $volsize = 0, &$tabledom = '') {
		$tabledom .= "DROP TABLE IF EXISTS $table\n";
		$createtable = mysqli_query($this->conn,"SHOW CREATE TABLE $table");
		$create = mysqli_fetch_row($createtable);
		$create[1] = str_replace("\n", "", $create[1]);
		$create[1] = str_replace("\t", "", $create[1]);
		
		$tabledom  .= $create[1].";\n";
		
		$rows = mysqli_query($this->conn,"SELECT * FROM $table");
		$numfields = mysqli_num_fields($rows);
		$numrows = mysqli_num_rows($rows);
		$n = 1;
		$sqlarr = array();
		while ($row = mysqli_fetch_row($rows)) {
			$comma = "";
			$tabledom .= "INSERT INTO $table VALUES(";
			for ($i = 0; $i < $numfields; $i++) {
				$tabledom .= $comma."'".mysqli_escape_string($this->conn,$row[$i])."'";
				$comma = ",";
			}
			$tabledom .= ")\n";
			if ($volsize != 0 && strlen($this->transfer) >= $volsize * 1000) {
		   		$sqlarr[$n]= $tabledom;
		   		$tabledom = '';
				$n++;
		   }
		}
		return $sqlarr;
	}
	
	/**
	 *验证目录是否有效，同时删除该目录下的所有文件
	 *@param diretory $dir
	 *@return booln
	 */
	protected function check_dir($dir) {
		if (!is_dir($dir)) {@mkdir($dir, 0777);}
		if (is_dir($dir)) {
			if ($link = opendir($dir)) {
				$filearr = scandir($dir);
				for ($i = 0; $i < count($filearr);$i++) {
					if ($filearr[$i] != '.' || $filearr != '..') {
						@unlink($dir.$filearr[$i]);
					}
				}
			}
		}
		return true;
	}
	
	/**
	 *将数据写入到文件中
	 *@param file $fileName 文件名
	 *@param string $str   要写入的信息
	 *@return booln 写入成功则返回true,否则false
	 */
	protected function write_sql($filename, $str){
		$re = true;
		if (!$fp = @fopen($filename, "w+")) {
			$re = false;
			$this->error("在打开文件时遇到错误，备份失败!");
		}
		if (!@fwrite($fp, '<?php exit;?>'.$str)) {
			$re = false;
			$this->error("在写入信息时遇到错误，备份失败!");
		}
		if (!@fclose($fp)) {
			$re = false;
			$this->error("在关闭文件 时遇到错误，备份失败!");
		}
		return $re;
	}
	
	public function error($str) {
		echo($str);
	}
}
?>