<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

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

/* Route for profile */
Route::get('/profile', [PagesController::class, 'getProfile']);
Route::get('/profile/edit', [ProfileController::class, 'editProfile']);

/* Route for detail */
Route::get('/news/detail', [PostController::class, 'getDetail']);
Route::get('/news/detail/create', [PostController::class, 'createDetail']);


/* Route for admin */
Route::get('/admin', [AdminController::class, 'getIndex']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
