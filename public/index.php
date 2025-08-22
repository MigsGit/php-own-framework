<?php
   

/**
 * Define root directory.
 */
define('APP_ROOT', dirname(__DIR__));

/**
 * Register The Auto Loader.
 */

if (!file_exists(APP_ROOT . '/vendor/autoload.php')){
    echo '/vendor/autoload.php not exists';
}
require_once APP_ROOT . '/vendor/autoload.php';


use App\Application;

$app = new Application();


$app->router->get( '/hello', function () {
    echo 'hello';
    return;
} );

$app->run();
echo json_encode($app);