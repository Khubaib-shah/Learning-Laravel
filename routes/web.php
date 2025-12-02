<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Get all Listings
Route::get('/', function () {

    return view('listings', [

        "heading" => 'Listings', // the first one is key or we can say variable name... and the second is Value it can be any thing from just a value to objects arrays 

        "listings" => Listing::all()
    ]);
});

// Get single Listing
Route::get('/listing/{listing}', function (Listing $listing) {
    return view('listing', [
        "listing" => $listing
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


Route::get('/search', function (Request $request) {
    // How Query works
    // /search?name=khubaib&age=21
    return $request->name . ' ' . $request->age; //output khubaib 21 
});