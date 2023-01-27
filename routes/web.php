<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class,'home']);

Route::get('/operator/{category_id}', [HomeController::class,'operator']);

Route::get('/product/{operator_id}/{category_id}', [HomeController::class,'product']);








Route::get('/cart',function() {
    return view('home.cart');
});

Route::get('/transaction',function() {
    return view('home.transaction');
});
