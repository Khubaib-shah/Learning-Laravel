<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function () {
    return 'Hello World';
});


Route::get('/response', function () {
    return response(
        "<h1>Hello response</h1>"
    )->header('Content-Type', 'text/plain')->header('foo', 'bar');
});


Route::get('posts/{_id}', function ($_id) {
    dd($_id);
    return response("Post " . $_id);
})->where('_id', '[0-9]+');

Route::get('/search', function (Request  $request) {
    // How Query works
    // /search?name=khubaib&age=21
    return $request->name . ' ' . $request->age; //output khubaib 21 
});