<?php

use App\Http\Controllers\paymentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\HTTP\Models;
use GuzzleHttp\Middleware;

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

// Route::get('/', function () {
//     return view('User/welcome');
// });

        // admin
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth:admin')->name('home');

// Route::get('admin/login', [App\Http\Controllers\CustomAuthController::class, 'adminlogin'])->name('admin/login');
// Route::post('admin/login', [App\Http\Controllers\CustomAuthController::class, 'checkAdmin'])->name('check.admin');

        //   Category
Route::get('Category/index', [App\Http\Controllers\CategoryController::class, 'index'])->name('Category/index')->middleware('auth:admin');
Route::get('Category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('Category/create')->middleware('auth:admin');
Route::post('Category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('Category/store')->middleware('auth:admin');
Route::get('Category/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('Category/edit')->middleware('auth:admin');
Route::post('Category/update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('Category/update')->middleware('auth:admin');
Route::get('Category/delete/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('Category/delete')->middleware('auth:admin');
Route::get('Category/show/{id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('Category/show')->middleware('auth:admin');


    //    Book
Route::get('Book/index', [App\Http\Controllers\BookController::class, 'index'])->name('Book/index')->middleware('auth:admin');
Route::get('Book/create', [App\Http\Controllers\BookController::class, 'create'])->name('Book/create')->middleware('auth:admin');
Route::post('Book/store', [App\Http\Controllers\BookController::class, 'store'])->name('Book/store')->middleware('auth:admin');
Route::get('Book/edit/{id}', [App\Http\Controllers\BookController::class, 'edit'])->name('Book/edit')->middleware('auth:admin');
Route::post('Book/update/{id}', [App\Http\Controllers\BookController::class, 'update'])->name('Book/update')->middleware('auth:admin');
Route::get('Book/delete/{id}', [App\Http\Controllers\BookController::class, 'destroy'])->name('Book/delete')->middleware('auth:admin');

    //user
Route::get('User/index', [App\Http\Controllers\UserController::class, 'index'])->name('User/index')->middleware('auth:admin');
Route::get('User/delete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('User/delete')->middleware('auth:admin');
Route::get('User/show/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('User/show')->middleware('auth:admin');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth:admin')->name('home');

Route::get('admin/login', [App\Http\Controllers\CustomAuthController::class, 'adminlogin'])->name('admin/login');
Route::post('admin/login', [App\Http\Controllers\CustomAuthController::class, 'checkAdmin'])->name('check.admin');


// user
Route::get('/', [App\Http\Controllers\MainHomeController::class, 'index'])->name('/main');
Route::get('/books/{id}', [App\Http\Controllers\MainHomeController::class, 'show'])->name('/books');
Route::get('book/search', [App\Http\Controllers\MainHomeController::class, 'search'])->name('book/search');

//cart
Route::post('addcart', [App\Http\Controllers\MainHomeController::class, 'addToCart'])->name('addcart')->middleware('auth');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'showOrder'])->name('/cart')->middleware('auth');
Route::get('cart/delete/{id}', [App\Http\Controllers\CartController::class, 'deleteOrder'])->name('cart/delete')->middleware('auth');
//payment
Route::get('get-checkout',[paymentController::class,'checkOut'])->name('get-checkout')->middleware('auth');
Route::get('storeTransaction',[paymentController::class,'storeTransaction'])->name('storeTransaction')->middleware('auth');
