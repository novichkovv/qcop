<?php
/**
 * configuration file
 */

error_reporting(E_ERROR | E_WARNING | E_PARSE);
define('DS', DIRECTORY_SEPARATOR);
define('ROOT_DIR', realpath($_SERVER['DOCUMENT_ROOT']) . DS);
define('CORE_DIR', realpath($_SERVER['DOCUMENT_ROOT']) . DS . 'core' . DS);
define('SITE_DIR', 'http://' . str_replace('http://', '', $_SERVER['HTTP_HOST'] . '/'));
define('TEMPLATE_DIR', ROOT_DIR . 'templates' . DS);
define('FR_ROOT_DIR', 'path/to/filerun_root' . DS);
define('IMAGE_DIR', ROOT_DIR . 'agsdocs' . DS . 'images' . DS);
define('DEVELOPMENT_MODE', true);

define('DB_NAME', 'qcop');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
