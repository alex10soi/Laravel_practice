<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
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

Route::get('/', function () {
	$post = Post::all();
	if(count($post) > 0) {
		$postId = $post[count($post) - 1]->id;
	} else {
		$postId = 0;
	}
    return view('layouts.app', compact('postId'));
})->name('homepage');

Route::get('/posts', [PostController::class, 'index'])->name('postsList');
Route::get('/posts/create', [PostController::class, 'create'])->name('createPosts');
Route::post('/posts/create', [PostController::class, 'store'])->name('storePost');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('showPosts');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('editPosts');
Route::put('/posts/{post}/update', [PostController::class, 'update'])->name('updatePosts');
Route::delete('/posts/{post}/delete', [PostController::class, 'destroy'])->name('deletePosts');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
