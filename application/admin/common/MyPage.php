<?php
namespace app\admin\common;
use Think\Page;
class MyPage{
	public static function GetPage($count,$eve_page=6){
		$page_obj=new Page($count,$eve_page);
		$page_obj->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
		$page_obj->setConfig('prev', '上一页');
		$page_obj->setConfig('next', '下一页');
		$page_obj->setConfig('last', '末页');
		$page_obj->setConfig('first', '首页');
		$page_obj->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
		return $page_obj;
	}
}
