<?php
// router.php

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// If the requested file is a static asset (CSS/JS/images)
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js|ico|woff|woff2|ttf|svg|mp4)$/i', $path)) {
    // Return false to let the built-in server handle the static file natively
    return false;
}

$uri = ltrim($path, '/');
// Emulate mod_rewrite by extracting the path and passing it to index.php's Bootstrap via GET

if ($uri !== '' && $uri !== 'index.php') {
    $_GET['uri'] = $uri;
} else {
    // Unset so Bootstrap safely defaults to "index" controller
    unset($_GET['uri']); 
}

// Route to index.php
require 'index.php';
