<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;;

use App\Http\Controllers\TagController;;


/* Route for menu */

Route::get('/home', [PagesController::class, 'getIndex']);

Route::get('/mobile', function () {
    return view('user.news.mobile');
});
Route::get('/concept', function () {
    return view('user.news.concept');
});
Route::get('/ung-dung', function () {
    return view('user.news.ung-dung');
});
Route::get('/thu-thuat', function () {
    return view('user.news.thu-thuat');
});
Route::get('/cong-nghe-vui', function () {
    return view('user.news.cong-nghe-vui');
});
Route::get('/contact', function () {
    return view('user.news.contact ');
});
Route::get('/about-us', function () {
    return view('user.news.about-us');
});Route::get('/faq', function () {
    return view('user.news.faq');
});

/* Route for admin */
Route::group(['prefix' => 'admin'], function () {
    Route::get('profile', [AdminController::class, 'getProfile']);
    Route::get('profile/edit', [ProfileController::class, 'editProfile']);
    Route::get('post', [AdminController::class, 'getPost']);
    Route::get('post/create', [PostController::class, 'createPost']);
    Route::get('author/list', [AdminController::class, 'getAuthor']);
    Route::get('category', [AdminController::class, 'getCategory']);
    Route::get('category/create', [CategoryController::class, 'createCategory']);
    Route::get('tag', [AdminController::class, 'getTag']);
    Route::get('tag/create', [TagController::class, 'createTag']);
});

/* Route for detail */
Route::get('/news/detail', [PostController::class, 'getDetail']);
Route::get('/news/detail-2', [PostController::class, 'getDetail2']);


/* Route for admin */
Route::get('/admin', [AdminController::class, 'getIndex']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
