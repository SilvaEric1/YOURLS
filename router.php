<?php
// router.php for YOURLS - replicate .htaccess rewrite rules with PHP built-in server

$requested = $_SERVER['REQUEST_URI'];
$path = parse_url($requested, PHP_URL_PATH);
$file = __DIR__ . $path;

// If file or directory exists, serve it directly
if (file_exists($file)) {
    return false;
}

// Otherwise, redirect all other requests to yourls-loader.php
require_once __DIR__ . '/yourls-loader.php';
