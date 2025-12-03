<?php

use App\Http\Controllers\LisitngController;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Get all Listings
Route::get('/', [LisitngController::class, 'index']);

// Create Listing
Route::get('/listing/create', [LisitngController::class, 'create']);

// Store Listing Data
Route::post('/listing', [LisitngController::class, 'store']);





// Get single Listing
Route::get('/listing/{listing}', [LisitngController::class, 'show']);









// Learning 
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