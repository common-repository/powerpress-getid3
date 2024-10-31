<?php
/*
Plugin Name: PowerPress GetID3 1.9.3 add-on
Plugin URI: http://www.pluginspodcast.com/plugins/powerpress-getid3/
Description: Replaces the GetID3 library used in PowerPress with an older version 1.9.3.
Version: 1.0.1
Contributors: Angelo Mandato, CIO Blubrry Podcasting
Author URI: http://blubrry.com/

Requires at least: 4.4
Tested up to: 5.4
Text Domain: powerpress-getid3
Change Log: See readme.txt for complete change log
Contributors: Angelo Mandato, CIO Blubrry Podcasting
License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt

Copyright 2016-2020 Angelo Mandato (http://angelo.mandato.com)
*/

if( !defined('POWERPRESS_GETID3_LIBRARY') )
{
	if(version_compare(get_bloginfo('version'),'5.1', '<') ) {
		define('POWERPRESS_GETID3_LIBRARY', dirname(__FILE__).'/getid3-1.9.3/getid3.php');
	}
}
