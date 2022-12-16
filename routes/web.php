<?php

use App\Models\Product;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Order;

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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('products','\App\Http\Controllers\ProductController');

//Route::resource('orders','\App\Http\Controllers\OrderController'); //I haven't finished setting it's functions but it's gonna be same as /products 



Route::get('/admin', function(){                                    //testing how middlewares work
    return view('admin');
})->middleware('isAdmin');


Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();
Auth::routes(['verify' => true]);
