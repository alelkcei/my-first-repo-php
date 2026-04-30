<?php

use wfm\Router;

if (PHP_MAJOR_VERSION < 8.0) {
    die('не поддерживается');
}

require_once dirname(__DIR__) . "/config/init.php";
require_once HELPERS . "/functions.php";
require_once CONFIG  . "/routes.php";



new \wfm\App();

//throw new Exception('Возникла ошибка');  

//debug(Router::getRoutes());
