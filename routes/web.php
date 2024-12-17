<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::prefix('admin')->name('admin.')->group(function(){
    Route::controller(AdminController::class)->group(function(){
        Route::view('register', 'admin.register')->name('register');
        Route::post('registerd', 'registered')->name('registered');
        Route::get('login', 'viewlogin')->name('viewLogin');

        Route::post('adminlogin', 'adminlogin')->name('Login');
        Route::get('profile', 'profile')->name('profile');
        Route::get('logout/{id}', 'logout')->name('logout');
    });
});


Route::prefix('user')->group(function(){
    Route::controller(UserController::class)->group(function(){
        Route::get('user', 'login')->name('login');
        Route::post('login', 'userlogin')->name('userlogin');
        Route::get('home', 'home')->name('home');
        Route::get('home','userProduct')->name('userProduct');
        Route::get('cart/{id}', 'addtoCart')->name('addtoCart');
    });
});


Route::prefix('product')->name('product.')->group(function(){
    Route::controller(ProductController::class)->group(function(){
        Route::get('createproduct', 'createproduct')->name('createproduct');
        Route::post('addproduct', 'addproduct')->name('addproduct');
        Route::get('products', 'products')->name('list');
        Route::get('mobiles', 'mobiles')->name('mobiles');
        Route::get('laptops', 'laptops')->name('laptops');
        Route::get('update/{id}', 'productupdate')->name('update');
        Route::post('updated', 'updated')->name('updated');
        Route::get('delete/{id}', 'productdelete')->name('delete');
        Route::get('buy/{id}', 'ProductBuy')->name('ProductBuy');
    
    });
});

