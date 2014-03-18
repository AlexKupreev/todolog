<?php

// Take environment variable set by server
if ($_SERVER['APP_ENV'] !== 'production') {
    define('ENVIRONMENT', 'development');
} else {
    define('ENVIRONMENT', 'production');
}

define('EXT', '.php');

// Set error reporting
if (ENVIRONMENT !== 'production') {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
} else {
    error_reporting(E_ALL);
    ini_set('display_errors', '0');
    ini_set('display_startup_errors', '0');
}

define('DOCROOT', realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR);

$appRelative = DOCROOT.DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'app';
define('APPPATH', realpath($appRelative) . DIRECTORY_SEPARATOR);

// Preliminary system reqirements check
require APPPATH . 'check' . EXT;

// We'll use the composer autoloading, so no need to setup vendor path constant
require DOCROOT. '..' . DIRECTORY_SEPARATOR . 'vendor/autoload' . EXT;

require APPPATH . 'init' . EXT;
