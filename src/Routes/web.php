<?php

use Src\controler\HomeControler;
use Src\controler\LoginControler;
use Src\controler\RegisterControler;
use Src\Controllers\AdminController;
use Src\Controllers\DoctorController;
use Src\Controllers\LoginController;
use Src\Controllers\RegisterController;
use Src\Core\Router;


Router::get('/login', [LoginControler::class, 'create']);
Router::get('/', [HomeControler::class, 'index']);


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




