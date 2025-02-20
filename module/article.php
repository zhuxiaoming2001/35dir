<?php
if (!defined('IN_HANFOX')) exit('Access Denied');

$pagename = '文章资讯';
$pageurl = '?mod=article';
$tempfile = 'article.html';
$table = $DB->table('articles');

$pagesize = 10;
$curpage = intval(isset($_GET['page'])? $_GET['page'] : 1);
if ($curpage > 1) {
	$start = ($curpage - 1) * $pagesize;
} else {
	$start = 0;
	$curpage = 1;
}
		
$cate_id = intval(isset($_GET['cid'])? $_GET['cid'] : 0);
$cache_id = $cate_id.'-'.$curpage;

$pageurl .= '&cid='.$cate_id;

if (!$smarty->isCached($tempfile, $cache_id)) {
	$smarty->assign('site_title', $pagename.' - '.$options['site_name']);
	$smarty->assign('site_keywords', $options['site_keywords']);
	$smarty->assign('site_description', $options['site_description']);
	$smarty->assign('site_path', get_sitepath('article'));
	$smarty->assign('site_rss', get_rssfeed('article'));
	
	$where = "a.art_status=3";
	if ($cate_id > 0) {
		$cate = get_one_category($cate_id);
		if (!$cate) {
			unset($cate);
			redirect('./?mod=index');
		}
		
		$smarty->assign('site_title', $cate['cate_name'].' - '.$options['site_name']);
		$smarty->assign('site_keywords', !empty($cate['cate_keywords']) ? $cate['cate_keywords'] : $options['site_keywords']);
		$smarty->assign('site_description', !empty($cate['cate_description']) ? $cate['cate_description'] : $options['site_description']);
		$smarty->assign('site_path', get_sitepath($cate['cate_mod'], $cate['cate_id']));
		$smarty->assign('site_rss', get_rssfeed($cate['cate_mod'], $cate['cate_id']));
	
		if ($cate['cate_childcount'] > 0) {
			$where .= " AND a.cate_id IN (".$cate['cate_arrchildid'].")";
			$categories = get_categories($cate['cate_id']);
		} else {
			$where .= " AND a.cate_id=$cate_id";
			$categories = get_categories($cate['root_id']);
		}
	} else {
		$categories = get_categories();
	}
	
	$articles = get_article_list($where, 'ctime', 'DESC', $start, $pagesize);
	$total = $DB->get_count($table.' a', $where);
	$showpage = showpage($pageurl, $total, $curpage, $pagesize);
	
	$smarty->assign('pagename', $pagename);
	$smarty->assign('cate_id', isset($cate_id) ? $cate_id : 0);
	$smarty->assign('cate_name', isset($cate['cate_name']) ? $cate['cate_name'] : $pagename);
	$smarty->assign('categories', $categories);
	$smarty->assign('total', $total);
	$smarty->assign('articles', $articles);
	$smarty->assign('showpage', $showpage);
	unset($categories, $articles);
}

smarty_output($tempfile, $cache_id);
?>