<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Before running an Api we should run 'php artisan install:api'
// and the create an api below is the example of posts

Route::get('/posts', function () {
    return response()->json([
        'post'=>[
            [
                'title'=>'How api work'
            ]
        ]
    ]);
});
