<?php
/*
 * @Author       :  　 @祥💥　技术支持
 * @Mail         : shejiz@qq.com
 * @Date         : 2025-02-12 15:22:31
 * @LastEditTime : 2025-02-15 16:52:47
 * @LastEditors  :  　 @祥💥　技术支持
 * @Description  : 
 * @FilePath     : \35dir\source\module\rewrite.php
 * It's up to you ^_^
 * Copyright (c) 2025 by shejiz@qq.com, All Rights Reserved. 
 */
/** rewrite output */
function rewrite_output($content) {
    $search = array(
        "/href\=\"(\.*\/*)\?mod\=(index|webdir|weblink|article|category|update|archives|top|feedback|link)?\"/",
        "/href\=\"(\.*\/*)\?mod\=webdir([&amp;|&]cid\=(\d+))?([&amp;|&]page\=(\d+))?\"/",
        "/href\=\"(\.*\/*)\?mod\=article([&amp;|&]cid\=(\d+))?([&amp;|&]page\=(\d+))?\"/",
        "/href\=\"(\.*\/*)\?mod\=update([&amp;|&]days\=(\d+))?([&amp;|&]page\=(\d+))?\"/",
        "/href\=\"(\.*\/*)\?mod\=archives([&amp;|&]date\=(\d+))?([&amp;|&]page\=(\d+))?\"/",
        "/href\=\"(\.*\/*)\?mod\=search([&amp;|&]type\=(.+?))?([&amp;|&]query\=(.+?))?([&amp;|&]page\=(\d+))?\"/",
        "/href\=\"(\.*\/*)\?mod\=siteinfo[&amp;|&]wid\=(\d+)\"/",
        "/href\=\"(\.*\/*)\?mod\=diypage[&amp;|&]pid\=(\d+)\"/",
        "/href\=\"(\.*\/*)\?mod\=rssfeed([&amp;|&]type\=(webdir|article))?([&amp;|&]cid\=(\d+))?\"/",
        "/href\=\"(\.*\/*)\?mod\=sitemap([&amp;|&]type\=(webdir|article))?([&amp;|&]cid\=(\d+))?\"/"
    );

    return preg_replace_callback(
        $search,
        function ($matches) {
            switch (true) {
                case isset($matches[2]):
                    return rewrite_module($matches[2]);
                case preg_match("/webdir/", $matches[0]):
                    return rewrite_category('webdir', isset($matches[3]) ? $matches[3] : null, isset($matches[5]) ? $matches[5] : null);
                case preg_match("/article/", $matches[0]):
                    return rewrite_category('article', isset($matches[3]) ? $matches[3] : null, isset($matches[5]) ? $matches[5] : null);
                case preg_match("/update/", $matches[0]):
                    return rewrite_update(isset($matches[3]) ? $matches[3] : null, isset($matches[5]) ? $matches[5] : null);
                case preg_match("/archives/", $matches[0]):
                    return rewrite_archives(isset($matches[3]) ? $matches[3] : null, isset($matches[5]) ? $matches[5] : null);
                case preg_match("/search/", $matches[0]):
                    return rewrite_search(isset($matches[3]) ? $matches[3] : 'name', isset($matches[5]) ? $matches[5] : null, isset($matches[7]) ? $matches[7] : null);
                case preg_match("/siteinfo/", $matches[0]):
                    return rewrite_siteinfo($matches[2]);
                case preg_match("/diypage/", $matches[0]):
                    return rewrite_diypage($matches[2]);
                case preg_match("/rssfeed/", $matches[0]):
                    return rewrite_rssfeed(isset($matches[3]) ? $matches[3] : null, isset($matches[5]) ? $matches[5] : null);
                case preg_match("/sitemap/", $matches[0]):
                    return rewrite_sitemap(isset($matches[3]) ? $matches[3] : null, isset($matches[5]) ? $matches[5] : null);
                default:
                    return $matches[0];
            }
        },
        $content
    );
}

/** module */
function rewrite_module($module) {	
    return 'href="'.get_module_url($module).'"';
}

/** category */
function rewrite_category($cate_mod, $cate_id, $page) {
    return 'href="'.get_category_url($cate_mod, $cate_id, $page).'"';
}

/** update */
function rewrite_update($days, $page) {
    return 'href="'.get_update_url($days, $page).'"';
}

/** archives */
function rewrite_archives($date, $page) {
    return 'href="'.get_archives_url($date, $page).'"';
}
    
/** search */
function rewrite_search($type = 'name', $query='', $page='') {
    return 'href="'.get_search_url($type, $query, $page).'"';
}

/** siteinfo */
function rewrite_siteinfo($web_id) {
    return 'href="'.get_website_url($web_id).'"';
}

/** diypage */
function rewrite_diypage($page_id) {	
    return 'href="'.get_diypage_url($page_id).'"';
}

/** rssfeed */
function rewrite_rssfeed($module, $cate_id) {
    return 'href="'.get_rssfeed_url($module, $cate_id).'"';
}

/** sitemap */
function rewrite_sitemap($module, $cate_id) {
    return 'href="'.get_sitemap_url($module, $cate_id).'"';
}
?>