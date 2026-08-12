<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('VERSION', '1.5.9');

if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == 'localhost:8000' || $_SERVER['HTTP_HOST'] == 'localhost:8001' || $_SERVER['HTTP_HOST'] == 'localhost:8002' || $_SERVER['HTTP_HOST'] == '192.168.1.19:8080' || $_SERVER['HTTP_HOST'] == '104.197.167.156') {
    if (php_sapi_name() === 'cli-server') {
        define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST']);
    } else {
        define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/' . basename(__DIR__));
    }
    //test
    //define('SERVER_URL', 'http://imk2.dev2.imkloud.com/');
    define('SERVER_URL', 'https://prod.imkloud.com/');
    $GLOBALS['config'] = array(
        'basePath' => __DIR__,
        'IMK' => array(
            'user' => [
                // 'id' => 'cam97KoyYcweFwMh7',
                // 'group' => 'ge7AYaBZd5q6kxFgf',

                'id' => 'bp9DeeGDTZ7Za4qre',
                'group' => 'ZpH8YQTyfm2GcqCsQ',



            ]
        )
    );
} else {
    // Detect the sub-folder the app is served from (e.g. '/imperium' under a
    // sub-folder deployment, '' at the domain root) so BASE_URL points at this
    // site rather than the domain root. helpers.php's base_path() isn't loaded
    // yet at this point, so compute it inline here.
    $subDir = '';
    if (!empty($_SERVER['DOCUMENT_ROOT'])) {
        $docRoot = rtrim(str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']), '/');
        $appDir  = str_replace('\\', '/', __DIR__);
        if (strpos($appDir, $docRoot) === 0) {
            $subDir = rtrim(substr($appDir, strlen($docRoot)), '/');
        }
    }
    if (!empty($_SERVER['HTTPS'])) {
        define("BASE_URL", "https://" . $_SERVER['HTTP_HOST'] . $subDir);
    } else {
        define("BASE_URL", "http://" . $_SERVER['HTTP_HOST'] . $subDir);
    }

    //test
    define('SERVER_URL', 'https://prod.imkloud.com/');
    $GLOBALS['config'] = array(
        'basePath' => __DIR__,
        'IMK' => array(
            'user' => [
                'id' => 'bp9DeeGDTZ7Za4qre',
                'group' => 'ZpH8YQTyfm2GcqCsQ',
            ]
        )
    );
}

require __DIR__ . '/helpers/Helper.php';
require __DIR__ . '/helpers/Seo.php';
require __DIR__ . '/helpers/Aeo.php';
require __DIR__ . '/libs/config.php';
require __DIR__ . '/helpers.php';
require __DIR__ . '/package/autoload.php';
require __DIR__ . '/libs/Bootstrap.php';
require __DIR__ . '/controllers/Controller.php';
require __DIR__ . '/libs/Input.php';


define('SITE_NAME', 'Imperium');

/**
 * Canonical origin used for <link rel="canonical">, og:url and sitemap.xml.
 *
 * Pinned to the www host in production because the site answers on BOTH
 * imperiumapp.com and www.imperiumapp.com — without a fixed canonical, Google
 * treats those as two competing copies of every page and splits the ranking
 * signals between them. Any other host (localhost, staging, a sub-folder
 * deployment) leaves SITE_URL empty so Seo::siteUrl() derives it from the
 * request instead.
 */
$canonicalHost = isset($_SERVER['HTTP_HOST']) ? strtolower($_SERVER['HTTP_HOST']) : '';
if ($canonicalHost === 'imperiumapp.com' || $canonicalHost === 'www.imperiumapp.com') {
    define('SITE_URL', 'https://www.imperiumapp.com');
} else {
    define('SITE_URL', '');
}



$bootstrap = new Bootstrap();
