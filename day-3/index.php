<?php

use APP\Core\Router;

require __DIR__ . "/vendor/autoload.php";

define('ROOT_DIR', __DIR__);

$obj = new Router();


$obj->get('/about','about');
$obj->get('/', 'home');

$obj->run();