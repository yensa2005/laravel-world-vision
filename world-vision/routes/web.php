<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;;

use App\Http\Controllers\TagController;;


/* Route for menu */

Route::get('/home', [PagesController::class, 'getIndex'])->name('home');

Route::get('/mobile', function () {
    return view('user.news.mobile')->name('news.mobile');
});
Route::get('/concept', function () {
    return view('user.news.concept')->name('news.concept');
});
Route::get('/ung-dung', function () {
    return view('user.news.ung-dung')->name('news.ung-dung');
});
Route::get('/thu-thuat', function () {
    return view('user.news.thu-thuat')->name('news.thu-thuat');
});
Route::get('/cong-nghe-vui', function () {
    return view('user.news.cong-nghe-vui')->name('news.cong-nghe-vui');
});
Route::get('/contact', function () {
    return view('user.news.contact ')->name('news.contact');
});
Route::get('/about-us', function () {
    return view('user.news.about-us')->name('news.about-us');
});
Route::get('/faq', function () {
    return view('user.news.faq')->name('news.faq');
});

/* Route for admin */
Route::group(['prefix' => 'admin'], function () {
    //Profile
    Route::get('profile', [AdminController::class, 'getProfile'])->name('admin.profile');
    Route::get('profile/edit', [ProfileController::class, 'editProfile'])->name('admin.editProfile');
    //Post
    Route::get('post', [AdminController::class, 'getPost'])->name('admin.post');
    Route::get('post/create', [PostController::class, 'createPost'])->name('admin.createPost');
    //Author
    Route::get('author', [AdminController::class, 'getAuthor'])->name('admin.author');
    //Category
    Route::get('category', [AdminController::class, 'getCategory'])->name('admin.category');
    Route::get('category/create', [CategoryController::class, 'createCategory'])->name('admin.createCategory');
    //Tag
    Route::get('tag', [AdminController::class, 'getTag'])->name('admin.tag');
    Route::get('tag/create', [TagController::class, 'createTag'])->name('admin.createTag');
});

/* Route for detail */
Route::get('/news/detail', [PostController::class, 'getDetail'])->name('news.detail');
Route::get('/news/detail-2', [PostController::class, 'getDetail2']);


/* Route for admin */
Route::get('/admin', [AdminController::class, 'getIndex'])->name('admin');
Route::get('/dang-nhap', [AdminController::class, 'getLogin'])->name('dang-nhap');
Route::get('/join', [AdminController::class, 'getRegister'])->name('join');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
