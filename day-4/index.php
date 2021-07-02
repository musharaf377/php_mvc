<?php

use APP\Core\Router;
use APP\Controllers\PageController;

require __DIR__ . "/vendor/autoload.php";
define('ROOT_DIR', __DIR__);

$obj  = new Router();


$obj->get('/about',[PageController::class, 'about']);
$obj->get('/contact', [PageController::class, 'contact']);
$obj->get('/', 'home');

// $obj->get('/contact', 'contact');

$obj->run();