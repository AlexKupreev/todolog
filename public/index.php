<?php

// We need PHP 5.4+
if (version_compare(PHP_VERSION, '5.4.0', '<')) {
    die('This app runs correctly on PHP 5.4+');
}

// Set error reporting, take env var from server settings
if ($_SERVER['APP_ENV'] !== 'production') {
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
} else {
	error_reporting(E_ALL);
	ini_set('display_errors', '0');
	ini_set('display_startup_errors', '0');
}