<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts/create',[PostController::class, 'create']);
Route::post('/posts',[PostController::class, 'store']);
Route::get('/get/posts', [PostController::class, 'index']);
Route::get('/get/posts/{id}', [PostController::class, 'show']);
Route::get('/get/posts/{id}/edit', [PostController::class, 'edit']);
Route::put('/get/posts/{id}/update', [PostController::class, 'update']);
Route::Delete('/get/posts/{id}/destroy', [PostController::class, 'destroy']);