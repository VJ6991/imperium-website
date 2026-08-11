<?php
// router.php

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// A request like "//index-bold" is read by parse_url() as a protocol-relative URL
// ("index-bold" becomes the host), so PHP_URL_PATH comes back null. Fall back to the
// raw URI minus its query string, then collapse any leading slashes, so "//foo" and
// "/foo" route identically instead of emitting null-argument deprecations and
// silently falling through to the default controller.
if (!is_string($path) || $path === '') {
    $path = strtok((string) $_SERVER['REQUEST_URI'], '?');
}
$path = '/' . ltrim((string) $path, '/');

// Special case for static assets or the /cx directory - return false to serve directly
// xml + txt are in the list so /sitemap.xml and /robots.txt are served as the real
// static files they are. Without them the front controller swallows both and hands
// crawlers a 404 — which is exactly what production was doing to sitemap.xml.
if (preg_match('/\.(?:html|htm|xml|txt|png|jpg|jpeg|gif|avif|webp|css|js|ico|woff|woff2|ttf|svg|mp4|pdf)$/i', $path) || strpos($path, '/cx') === 0 || $path === '/get_solutions.php' || $path === '/get_content.php') {
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
