<?php
// Sub-directory the app is served from, e.g. '' at the domain root or
// '/imperium' when deployed under a sub-folder like listeniqapp.com/imperium/.
// Derived from the app's physical location under the web root, so it adapts to
// any deployment (root or sub-folder, any folder name) with no per-environment
// config. Without this, url()/asset() emit domain-root paths like /products,
// which on a sub-folder deployment resolve against the wrong site at the root.
function base_path() {
    static $base = null;
    if ($base !== null) {
        return $base;
    }
    $docRoot = isset($_SERVER['DOCUMENT_ROOT'])
        ? rtrim(str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']), '/')
        : '';
    $appDir = str_replace('\\', '/', __DIR__); // helpers.php lives in the app root
    if ($docRoot !== '' && strpos($appDir, $docRoot) === 0) {
        $base = rtrim(substr($appDir, strlen($docRoot)), '/');
    } else {
        $base = '';
    }
    return $base;
}
function asset($path) { return base_path() . '/assets/' . ltrim($path, '/'); }
function url($path = '') { return base_path() . '/' . ltrim($path, '/'); }