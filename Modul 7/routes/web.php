<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


//Author: Akmal Muhamad Firdaus - 1301204188
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    if (Auth::check()) return redirect('/product');
    return view('login');
})->name('login');
    

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});
    
Route::post('/auth', [SiteController::class, 'auth']);


Route::resource('products', ProductController::class)->middleware('auth');
