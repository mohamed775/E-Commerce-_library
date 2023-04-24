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
define('PAGINATION_COUNTER',20);

Auth::routes();
Route::get('admin/login', [App\Http\Controllers\Admin\CustomAuthController::class, 'adminlogin'])->name('admin/login');
Route::post('admin/login', [App\Http\Controllers\Admin\CustomAuthController::class, 'checkAdmin'])->name('check.admin');

Route::group(['middleware' => 'auth:admin'],function(){
    Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
    Route::group(['prefix' => 'Category' ],function(){
        Route::get('index', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('Category/index');
        Route::get('create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('Category/create');
        Route::post('store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('Category/store');
        Route::get('edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('Category/edit');
        Route::post('update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('Category/update');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('Category/delete');
        Route::get('show/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('Category/show');
    });

    Route::group(['prefix' => 'Book' ],function(){
        Route::get('index', [App\Http\Controllers\Admin\BookController::class, 'index'])->name('Book/index');
        Route::get('create', [App\Http\Controllers\Admin\BookController::class, 'create'])->name('Book/create');
        Route::post('store', [App\Http\Controllers\Admin\BookController::class, 'store'])->name('Book/store');
        Route::get('edit/{id}', [App\Http\Controllers\Admin\BookController::class, 'edit'])->name('Book/edit');
        Route::post('update/{id}', [App\Http\Controllers\Admin\BookController::class, 'update'])->name('Book/update');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\BookController::class, 'destroy'])->name('Book/delete');
    });
    
    Route::group(['prefix' => 'User' ],function(){
        Route::get('index', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('User/index');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('User/delete');
        Route::get('show/{id}', [App\Http\Controllers\Admin\UserController::class, 'show'])->name('User/show');
    });
});


Route::group(['middleware' => 'auth'],function(){
    //cart
    Route::post('addcart', [App\Http\Controllers\User\MainHomeController::class, 'addToCart'])->name('addcart');
    Route::get('/cart', [App\Http\Controllers\User\CartController::class, 'showOrder'])->name('/cart');
    Route::get('cart/delete/{id}', [App\Http\Controllers\User\CartController::class, 'deleteOrder'])->name('cart/delete');
    //payment
    Route::get('get-checkout',[App\Http\Controllers\User\paymentController::class,'checkOut'])->name('get-checkout');
    Route::get('storeTransaction',[App\Http\Controllers\User\paymentController::class,'storeTransaction'])->name('storeTransaction');
});

// user homepage
Route::get('/', [App\Http\Controllers\User\MainHomeController::class, 'index'])->name('/main');
Route::get('/books/{id}', [App\Http\Controllers\User\MainHomeController::class, 'show'])->name('/books');
Route::get('book/search', [App\Http\Controllers\User\MainHomeController::class, 'search'])->name('book/search');
