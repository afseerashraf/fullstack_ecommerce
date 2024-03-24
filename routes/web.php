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

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::controller(AdminController::class)->group(function(){
    Route::get('/admin', 'viewlogin')->name('viewlogin');
    Route::post('/adminlogin', 'adminlogin')->name('adminLogin');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/user', 'login')->name('login');
    Route::post('/login', 'userlogin')->name('userlogin');
    Route::get('/home', 'home')->name('home');
    Route::get('/home','userProduct')->name('userProduct');
});

Route::controller(ProductController::class)->group(function(){
    Route::post('/addproduct', 'addproduct')->name('addproduct');
    Route::get('/products', 'products')->name('product.list');
    Route::get('/update/{id}', 'productupdate')->name('update');
    Route::post('/updated', 'updated')->name('updated');
    Route::post('/delete/{id}', 'productdelete')->name('delete');

});
