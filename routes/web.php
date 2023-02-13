<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 dev_basis04
Route::get('/posts',[PostController::class, 'index']);

 dev_basis01
Route::get('/', function() {
    return view('posts/index');
});

Route::get('/',[PostController::class, 'index']);
 master
Route::get('/posts/create', [PostController::class,'create']);
Route::get('/posts/{post}', [PostController::class,'show']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('posts/{post}', [PostController::class, 'update']);
Route::delete('/posts/{post}', [PostController::class, 'delete']);
 dev_basis06
Route::get('/categories/{category}', [CategoryController::class,'index']);

 master
master
