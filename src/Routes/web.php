<?php
use Src\controllers\AdminController;
use Src\controllers\DoctorController;
use Src\controllers\HomeController;
use Src\controllers\LoginController;
use Src\controllers\RegisterController;
use Src\Core\Router;


Router::get('/login', [LoginController::class, 'create']);

Router::get('/', [HomeController::class, 'index']);

Router::post('/login', [LoginController::class, 'store']);
Router::post('/logout', [LoginController::class, 'destroy']);

Router::get('/register', [RegisterController::class, 'create']);
Router::post('/register', [RegisterController::class, 'store']);

Router::post('/delete',[AdminController::class,'delete']);
Router::post('/add',[AdminController::class,'store']);
Router::post('/edit',[AdminController::class,'edit']);
Router::post('/Show',[AdminController::class,'Show']);
Router::post('/create',[AdminController::class,'create']);
Router::post('/list',[AdminController::class,'confirm']);
Router::post('/edit',[DoctorController::class,'edit']);





