<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $posts = Post::all();
    return view('home', ['posts'=> $posts]);
});

Route::post('/register', [UserController::class, 'register']);
Route::post ('/logout',[UserController::class, 'logout']);
Route::post ('/login',[UserController::class, 'login']);
Route::post ('/create-posts',[PostController::class, 'createPost']);
Route ::get ('/edit-post/{post}', [PostController::class, 'showeditscreen']);
Route ::put ('/edit-post/{post}', [PostController::class, 'actuallyupdatepost']);
Route ::delete ('/delete-post/{post}', [PostController::class, 'deletepost']);

