<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
define('SITE_ROOT', dirname(getcwd()) . '/');
//defined('DS') ? null : define('SITE_ROOT', DS . 'C:' . DS . 'wamp' . DS . 'www' . DS . 'OOPgallery');

defined('DS') ? null : define('INCLUDES_PATH', SITE_ROOT.DS . 'admin' .DS.'includes');

require_once('functions.php');
require_once('new_config.php');
require_once('Database.php');
require_once('db_object.php');
require_once('User.php');
require_once('Photo.php');
require_once('session.php');