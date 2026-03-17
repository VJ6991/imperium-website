<?php
// router.php

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// If the requested file is a static asset (HTML/CSS/JS/images) or the cx/ directory
if (preg_match('/\.(?:html|htm|png|jpg|jpeg|gif|css|js|ico|woff|woff2|ttf|svg|mp4|pdf)$/i', $path) || strpos($path, '/cx') === 0) {
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
