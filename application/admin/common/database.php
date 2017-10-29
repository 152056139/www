<?php
namespace app\admin\commin;

use think\Config;

$database = Config::get('database.database');
//判断是不是第一次登录系统
//如果不是第一次登录系统，那就正常运行
//如果是第一次，运行安装程序

//安装程序start
//提示用户搭建环境，判断环境是否搭建成功
//用户输入数据库名，创建数据库，和数据表
