<?php
/*
Plugin Name: Quick Short Codes
Plugin URI: https://wordpress-bdd.com/
Description: Some quick short codes 
Version: 0.1
Author: John Dee
Author URI: https://wordpress-bdd.com
*/

namespace QSC;

require_once (plugin_dir_path(__FILE__). 'src/QSC/autoloader.php');

$TutorialsShortcodes = new TutorialsShortcodes;
$TutorialsShortcodes->doRegisterShortcode();