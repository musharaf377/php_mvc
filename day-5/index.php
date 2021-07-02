<?php

use App\Core\Route;
use App\Controllers\PageController;

require_once __DIR__ . "/vendor/autoload.php";

define('ROOT_DIR', __DIR__);

$obj_route = new Route;

// $obj_route->test();


$obj_route->get('/about',[PageController::class,'about']);
$obj_route->get('/contact',[PageController::class,'contact']);
$obj_route->get('/service','service');
$obj_route->get('/', 'home');


$obj_route->run();