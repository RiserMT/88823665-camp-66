<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;


Route::get('/mycontroller', 
    [MyController::class, 'myFunction']);

Route::post('/mycontroller', 
    [MyController::class, 'mulTable']);


Route::get('/mycontroller/{id?}', 
    [Mycontroller::class, 'myfunction']);

Route::post('/mycontroller/{id?}', 
    [Mycontroller::class, 'myfunction']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{id}', function ($val="") {
    return "<h1>Hello World! $val</h1>";
});