<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;

Route::post('auth/login', [LoginController::class, 'login'])->middleware('guest');
Route::apiResource('/post', PostController::class);
Route::apiResource('/like', LikeController::class);
Route::apiResource('/comment', CommentController::class);


