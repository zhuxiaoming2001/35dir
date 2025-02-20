<?php
class MySQL {
	var $db_link;
	var $db_host;
	var $db_port;
	var $db_user;
	var $db_pwd;
	var $db_name;
	var $db_charset;
	var $table_prefix;
	var $queries = 0;
	var $datadir;

	function __construct($db_host, $db_port, $db_user, $db_pwd, $db_name, $db_charset, $table_prefix, $is_pconnect) {
		$this->db_host = $db_host;
		$this->db_port = $db_port;
		$this->db_user = $db_user;
		$this->db_pwd = $db_pwd;
		$this->db_name = $db_name;
		$this->db_charset = $db_charset;
		$this->table_prefix = $table_prefix;
		
		//数据备份路径
		$this->datadir = ROOT_PATH.'data/dbbak/';

		if ($is_pconnect) {
			if (!$this->db_link = new mysqli($db_host, $db_user, $db_pwd, $db_name)) {
				$this->halt('Can not connect to MySQL server!');
			}
		} else {
			if (!$this->db_link = new mysqli($db_host, $db_user, $db_pwd, $db_name)) {
				$this->halt('Can not connect to MySQL server!');
			}
		}

		/*if ($this->version() > '4.1') {
			if ($db_charset) {
				mysqli_query("SET character_set_connection=".$db_charset.", character_set_results=".$db_charset.", character_set_client=binary", $this->db_link);
			}

			if ($this->version() > '5.0.1') {
				mysqli_query("SET sql_mode=''", $this->db_link);
			}
		}*/

		if ($db_name) {
			$this->select_db($db_name);
		}

	}
	
	function select_db($db_name) {
		return mysqli_select_db($this->db_link, $db_name);
	}
	
	function table($table_name) {
		return $this->table_prefix.$table_name;
	}
	
	function query($sql, $type = '', $cachetime = FALSE) {
		//echo $sql.'<br>';
		$func = $type == 'UNBUFFERED' && @function_exists('mysqli_unbuffered_query') ? 'mysqli_unbuffered_query' : 'mysqli_query';
		if (!($query = $func($this->db_link, $sql)) && $type != 'SILENT') {
			$this->halt('MySQL Query Error', $sql);
		}
		$this->queries++;
		return $query;
	}

	function fetch_array($query) {
		return mysqli_fetch_array($query);
	}

	function fetch_first($sql) {
		return $this->fetch_array($this->query($sql));
	}

	function fetch_one($sql) {
		$query = $this->query($sql);
		return $this->fetch_array($query);
	}

	function fetch_all($sql, $id = '') {
		$arr = array();
		$query = $this->query($sql);
		while($data = $this->fetch_array($query)) {
			$id ? $arr[$data[$id]] = $data : $arr[] = $data;
		}
		return $arr;
	}
	
	function fetch_row($query) {
		$query = mysqli_fetch_row($query);
		return $query;
	}

	function fetch_fields($query) {
		return mysqli_fetch_field($query);
	}
	
	function result($query, $row) {
		$query = @mysqli_result($query, $row);
		return $query;
	}
	
	function result_first($sql) {
		$query = $this->query($sql);
		return $this->result($query, 0);
	}
	
	function num_rows($query) {
		$query = mysqli_num_rows($query);
		return $query;
	}

	function num_fields($query) {
		return mysqli_num_fields($query);
	}
	
	function affected_rows() {
		return mysqli_affected_rows($this->db_link);
	}

	function error() {
		return (($this->db_link) ? mysqli_error($this->db_link) : mysqli_error());
	}

	function errno() {
		return intval(($this->db_link) ? mysqli_errno($this->db_link) : mysqli_errno());
	}

	function free_result($query) {
		return mysqli_free_result($query);
	}

	function insert_id() {
		return ($id = mysqli_insert_id($this->db_link)) >= 0 ? $id : $this->result($this->query("SELECT last_insert_id()"), 0);
	}
	
	function insert($table, $data, $replace = false) {
		$sql = $this->implode_field_value($data);
		$cmd = $replace ? 'REPLACE INTO' : 'INSERT INTO';
		//$table = $this->table($table);
		return $this->query("$cmd $table SET $sql");
	}
	
	function update($table, $data, $condition = '') {
		$sql = $this->implode_field_value($data);
		//$table = $this->table($table);
		$where = '';
		if (empty($condition)) {
			$where = '1';
		} elseif (is_array($condition)) {
			$where = $this->implode_field_value($condition, ' AND ');
		} else {
			$where = $condition;
		}
		return $this->query("UPDATE $table SET $sql WHERE $where");
	}
	
	function delete($table, $condition = '', $limit = 0) {
		//$table = $this->table($table);
		if (empty($condition)) {
			$where = '1';
		} elseif (is_array($condition)) {
			$where = $this->implode_field_value($condition, ' AND ');
		} else {
			$where = $condition;
		}
		$sql = "DELETE FROM $table WHERE $where ".($limit ? "LIMIT $limit" : '');
		return $this->query($sql);
	}
	
	function get_count($table, $condition = '') {
		//$table = $this->table($table);
		if (empty($condition)) {
			$where = '1';
		} elseif (is_array($condition)) {
			$where = $this->implode_field_value($condition, ' AND ');
		} else {
			$where = $condition;
		}
		$row = $this->fetch_first("SELECT COUNT(*) AS num FROM $table WHERE $where");
		return $row['num'];
	}

	function implode_field_value($array, $glue = ',') {
		$sql = $comma = '';
		foreach ($array as $key => $val) {
			$sql .= $comma."`$key`='$val'";
			$comma = $glue;
		}
		return $sql;
	}
	
	function version() {
		return mysqli_get_server_info($this->db_link);
	}

	function close() {
		return mysqli_close($this->db_link);
	}

	function halt($msg = '', $sql = '') {
		$error = mysqli_error();
		$errorno = mysqli_errno();
		
		$str = '';
		if ($msg) {
			$str = "<b>TIPS:</b> $msg<br />";
		}
		
		if ($sql) {
			$str .= '<b>SQL:</b>'.htmlspecialchars($sql).'<br />';
		}
		
		$str .= '<b>Error:</b>'.$error.'<br />';
		$str .= '<b>Errno:</b>'.$errorno.'<br />';
		exit($str);
	}
}
?>