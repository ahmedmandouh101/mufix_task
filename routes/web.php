<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Product;

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






Route::get('/route2',[App\Http\Controllers\UserController::class,'getUser'])->name('users.index');
Route::get('/user/update/{id}',[App\Http\Controllers\UserController::class,'update'])->name('user.update');
Route::delete('/user/delete/{id}',[App\Http\Controllers\UserController::class,'delete'])->name('user.delete');
Route::get('/user/create',[App\Http\Controllers\UserController::class,'create'])->name('user.create');
Route::post('/user/store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::put('/user/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');







// Route::get('/route1', function () {
//     $products = Product::get();
//     return view('product',['product'=>$products]);
// });



// Route::get('/route1', function () {
//     return Product::get();
// });


// Route::resource('/product','App\Http\Controllers\ProductController');

// Route::get('/order', [App\Http\Controllers\OrderController::class, 'index'])->name('order.index');
// Route::get('/order/with', [App\Http\Controllers\OrderController::class, 'getAllOrders'])->name('order.getAllOrders');



// Auth::routes(['verify' => true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
