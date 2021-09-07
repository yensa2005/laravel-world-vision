<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;


/* Route for menu */

Route::get('/home', [PagesController::class, 'getIndex']);

Route::get('/world', function () {
    return view('user.news.world');
});
Route::get('/magazine', function () {
    return view('user.news.magazine');
});
Route::get('/blog', function () {
    return view('user.news.blog');
});
Route::get('/business', function () {
    return view('user.news.business');
});
Route::get('/sports', function () {
    return view('user.news.sports');
});
Route::get('/art', function () {
    return view('user.news.art');
});
Route::get('/politics', function () {
    return view('user.news.politics');
});
Route::get('/real-estate', function () {
    return view('user.news.real-estate');
});
Route::get('/travel', function () {
    return view('user.news.travel');
});

/* Route for admin */
Route::group(['prefix' => 'admin'], function () {
    Route::get('profile', [AdminController::class, 'getProfile']);
    Route::get('profile/edit', [ProfileController::class, 'editProfile']);
    Route::get('post', [AdminController::class, 'getPost']);
    Route::get('post/create', [PostController::class, 'createPost']);
    Route::get('author/list', [AdminController::class, 'getAuthor']);
});

/* Route for detail */
Route::get('/news/detail', [PostController::class, 'getDetail']);


/* Route for admin */
Route::get('/admin', [AdminController::class, 'getIndex']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
