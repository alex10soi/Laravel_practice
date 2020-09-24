<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\CrudController;
// use App\Http\Middleware\checkRole;

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
    return view('layout');
});

// Route::get('/posts', [CrudController::class, 'submit'])->name('posts');

Route::get('/index', [CrudController::class, 'index'])->name('index');

Route::get('/edit', [CrudController::class, 'edit'])->name('edit');

Route::get('/show', [CrudController::class, 'show'])->name('show');

Route::get('/create', [CrudController::class, 'create'])->name('create');

Route::post('/', [CrudController::class, 'store'])->name('create_form');

// Route::post('/', [CrudController::class, 'update'])->name('create_form');
