<?php defined('APPPATH') or die('No direct script access allowed.');

// Checking script requirements

// We need PHP 5.4+
if (version_compare(PHP_VERSION, '5.4.0', '<')) {
    die('This app runs correctly on PHP 5.4+');
}
