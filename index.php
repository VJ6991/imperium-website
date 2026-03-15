<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('VERSION', '1.5.9');

if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == 'localhost:8000' || $_SERVER['HTTP_HOST'] == '192.168.1.19:8080' || $_SERVER['HTTP_HOST'] == '104.197.167.156') {
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
    if (!empty($_SERVER['HTTPS'])) {
        define("BASE_URL", "https://" . $_SERVER['HTTP_HOST']);
    } else {
        define("BASE_URL", "http://" . $_SERVER['HTTP_HOST']);
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
require __DIR__ . '/libs/config.php';
require __DIR__ . '/helpers.php';
require __DIR__ . '/package/autoload.php';
require __DIR__ . '/libs/Bootstrap.php';
require __DIR__ . '/controllers/Controller.php';
require __DIR__ . '/libs/Input.php';


define('SITE_NAME', 'Imperium');



$bootstrap = new Bootstrap();
