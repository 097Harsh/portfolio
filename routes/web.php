<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
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
/*
Route::get('/', function () {
    return view('welocme');
});*/
Route::get('/', [Usercontroller::class, 'index'])->name('home');
Route::get('/about', [Usercontroller::class, 'about'])->name('about');
Route::get('/contact', [Usercontroller::class, 'contact'])->name('contact');


Route::post('/store', [Usercontroller::class, 'store'])->name('store');