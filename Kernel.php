<?php
/**
 * HeyCMS
 *
 * An open source application development framework for PHP
 *
 * @package    HeyCMS
 * @author     HeyCMS Dev Team
 * @copyright  2018-2020 HeyCMS Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://HeyCMS.com
 * @since      Version 1.0.0
 * @filesource
 */

//版本号
define ('SYS_VER', '1.0.0');
define('IN', true);


//网站根目录
define ('PATH_WEB', substr(dirname(__FILE__),0,-10));
//应用开发包根目录
define ('PATH_APP', PATH_WEB."app/");
//应用文件根目录
define ('PATH_ALL_APP', PATH_WEB."app/app/");
//配置文件根目录
define ('PATH_CONFIG', PATH_WEB."config/");
//缓存文件根目录
define ('PATH_CACHE', PATH_WEB."cache/");
//应用开发框架内核根目录
define ('PATH_SYS', PATH_APP."system/");

//系统类根目录
define ('PATH_SYS_CLASS', PATH_WEB."app/system/include/class/");
//系统方法根目录
define ('PATH_SYS_FUNC', PATH_WEB."app/system/include/function/");
//系统模板公用文件根目录
define ('PATH_SYS_PUBLIC', PATH_WEB."app/system/include/public/");
define ('PATH_STATIC', PATH_APP."static/");
//系统模块根目录
define ('PATH_SYS_MODULE', PATH_WEB."app/system/include/module/");
