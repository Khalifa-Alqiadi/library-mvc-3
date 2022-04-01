<?php
require_once __DIR__ . '/../vendor/autoload.php';

use coding\app\controllers\IndexController;
use coding\app\system\AppSystem;
use coding\app\system\Router;
$system=new AppSystem();

/** web routes  */


Router::get('/',[IndexController::class,'list']);
Router::get('/book',[IndexController::class,'book']);
Router::get('/categories',[IndexController::class,'categories']);
Router::get('/cart',[IndexController::class,'cart']);
Router::get('/stepper',[IndexController::class,'stepper']);

/** end of web routes */



$system->start();

