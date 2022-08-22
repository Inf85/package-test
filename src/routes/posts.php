<?php

use Illuminate\Support\Facades\Route;

Route::get('/posts',[\Mikhail\Posts\Http\Controllers\PostController::class, 'index']);
