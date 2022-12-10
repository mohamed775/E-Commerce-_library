<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\HTTP\Models;
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


//pagination
define('PAGINATION_COUNTER',6);

Route::get('/', function () {
    return view('User/welcome');
});

Route::view('/admin', 'admin')->name('admin');
// Route::view('/category', 'category')->name('category');
// Route::view('/items', 'items')->name('items');
// Route::view('/users', 'users')->name('users');
// Route::view('/cart', 'cart')->name('cart');

        //   Category
Route::get('Category/index', [App\Http\Controllers\CategoryController::class, 'index'])->name('Category/index')->middleware('auth');
Route::get('Category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('Category/create')->middleware('auth');
Route::post('Category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('Category/store')->middleware('auth');
Route::get('Category/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('Category/edit')->middleware('auth');
Route::post('Category/update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('Category/update')->middleware('auth');
Route::get('Category/delete/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('Category/delete')->middleware('auth');
Route::get('Category/show/{id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('Category/show')->middleware('auth');


    //    Book
Route::get('Book/index', [App\Http\Controllers\BookController::class, 'index'])->name('Book/index')->middleware('auth');
Route::get('Book/create', [App\Http\Controllers\BookController::class, 'create'])->name('Book/create')->middleware('auth');
Route::post('Book/store', [App\Http\Controllers\BookController::class, 'store'])->name('Book/store')->middleware('auth');
Route::get('Book/edit/{id}', [App\Http\Controllers\BookController::class, 'edit'])->name('Book/edit')->middleware('auth');
Route::post('Book/update/{id}', [App\Http\Controllers\BookController::class, 'update'])->name('Book/update')->middleware('auth');
Route::get('Book/delete/{id}', [App\Http\Controllers\BookController::class, 'destroy'])->name('Book/delete')->middleware('auth');

    //user
Route::get('User/index', [App\Http\Controllers\UserController::class, 'index'])->name('User/index')->middleware('auth');
Route::get('User/delete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('User/delete')->middleware('auth');
Route::get('User/show/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('User/show')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
