<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;

Route::apiResource('/user', UserController::class);
Route::apiResource('/post', PostController::class);
Route::apiResource('/like', LikeController::class);
Route::apiResource('/comment', CommentController::class);


