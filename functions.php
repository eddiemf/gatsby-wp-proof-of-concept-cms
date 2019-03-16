<?php

require get_theme_file_path() . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

require_once "config/helpers.php";
require_once "config/setup.php";
require_once "config/admin.php";
require_once "config/filters.php";
