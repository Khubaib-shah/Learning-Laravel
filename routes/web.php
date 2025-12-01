<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function () {
    return 'Hello World';
});


Route::get('/response', function () {
    return response( "<h1>Hello response</h1>" 
)->header('Content-Type', 'text/plain')->header('foo' , 'bar');
});
