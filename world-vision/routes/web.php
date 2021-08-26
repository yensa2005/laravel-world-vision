<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

/* Route for user */
Route::get('', [PagesController::class, 'getIndex']);
Route::get('/news', [PagesController::class, 'getNews']);
Route::get('/news/detail', [PagesController::class, 'getNewsDetail']);
Route::get('/profile', [PagesController::class, 'getProfile']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
