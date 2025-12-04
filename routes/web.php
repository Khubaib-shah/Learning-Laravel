<?php

use App\Http\Controllers\LisitngController;
use App\Http\Controllers\UserController;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Get all Listings
Route::get('/', [LisitngController::class, 'index']);

// Create Listing
Route::get('/listing/create', [LisitngController::class, 'create'])
    ->middleware('auth');

// Store Listing Data
Route::post('/listing', [LisitngController::class, 'store'])->middleware('auth');

// Show Edit Listing 
Route::get('/listing/{listing}/edit', [LisitngController::class, 'edit'])->middleware('auth');

// Update Listing 
Route::put('/listing/{listing}/edit', [LisitngController::class, 'update'])->middleware('auth');

// Delete Listing 
Route::delete('/listing/{listing}', [LisitngController::class, 'destroy'])->middleware('auth');

// Get single Listing
Route::get('/listing/{listing}', [LisitngController::class, 'show']);




// User Register 
Route::get('/user/register', [UserController::class, 'create'])->middleware('guest');

// Store User  
Route::post('/user', [UserController::class, 'store']);

// Logout User  
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login User  
Route::get('/user/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login User  
Route::post('/user/authenticate', [UserController::class, 'authenticate']);







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