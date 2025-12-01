<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    return view('listings' , [

        "heading" => 'Listings', // the first one is key or we can say variable name... and the second is Value it can be any thing from just a value to objects arrays 
        
        "listings" => [
           [ 
            "id" => 1,
           'title' => "Angry Bird",
           "description" => "orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"
           ],
           [ 
            "id" => 2,
           'title' => "Angry Bird",
           "description" => "orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"
           ],
           [ 
            "id" => 3,
           'title' => "Angry Bird",
           "description" => "orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"
           ]
        ]
    ]);
});


Route::get('/hello', function () {
    return 'Hello World';
});


Route::get('/response', function () {
    return response(
        "<h1>Hello response</h1>"
    )->header('Content-Type', 'text/plain')->header('foo', 'bar');
});


Route::get('/posts/{_id}', function ($_id) {
    dd($_id);
    return response("Post " . $_id);
})->where('_id', '[0-9]+');

Route::get('/search', function (Request  $request) {
    // How Query works
    // /search?name=khubaib&age=21
    return $request->name . ' ' . $request->age; //output khubaib 21 
});