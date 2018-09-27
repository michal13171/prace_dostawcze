<?php

use App\Config\App;

//use web\Routes;

function pr($zm)
{
    echo '<pre>', var_dump($zm), '</pre>';
}

define('ROOT', dirname(realpath(__DIR__)) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'App' . DIRECTORY_SEPARATOR);
define('CONFIG', ROOT . 'App\Config' . DIRECTORY_SEPARATOR);
define('MODEL', ROOT . 'App\Models' . DIRECTORY_SEPARATOR);
define('SERVICES', ROOT . 'App\Services' . DIRECTORY_SEPARATOR);
define('CONTROLLER', ROOT . 'App\Controller' . DIRECTORY_SEPARATOR);
define('VIEW', ROOT . 'view\resource' . DIRECTORY_SEPARATOR);

$modules = [APP, CONFIG, CONTROLLER, MODEL, SERVICES, VIEW];
set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $modules));

require_once '../App/Config/autoload/autoload.php';
require '../web/routes.php';

//new App();


