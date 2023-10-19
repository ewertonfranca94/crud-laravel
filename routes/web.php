<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('posts/create', [PostController::class,'create']);
Route::get('posts/read', [PostController::class,'read']);
Route::get('posts/all', [PostController::class,'all']);
Route::get('posts/update', [PostController::class,'update']);
Route::get('posts/delete', [PostController::class,'delete']);
Route::get('posts/deleteAll', [PostController::class,'deleteAll']);
Route::get('posts/exibirposts', [PostController::class, 'index'])->name('exibirposts');
//Route::get('posts/exibirposts', [PostController::class,'index']);
Route::get('posts/criarpost', [PostController::class,'createStore']);
Route::post('/', [PostController::class, 'store'])->name('posts.create');

Route::get('/', function () {
    return view('welcome');
});
