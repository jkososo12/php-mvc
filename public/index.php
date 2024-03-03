<?php

require_once __DIR__ . "/../vendor/autoload.php";
use Jkososo12\PhpMvc\App\Route;
use Jkososo12\PhpMvc\Controller\HomeController;

Route::add('GET', '/', HomeController::class, 'index');
Route::add('GET', '/login', HomeController::class, 'login');
Route::add('GET', '/register', HomeController::class, 'register');
Route::add('GET', '/about', HomeController::class, 'about');
Route::run();

