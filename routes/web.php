<?php

use Illuminate\Support\Facades\Route;

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
    return view('site.index');
})->name('home');

Route::get('/login', function () {
    return view('site.identification');
})->name('identification');

Route::get('/criar-conta', function () {
    return view('site.create-account');
})->name('create-account');

Route::get('/carrinho', function () {
    return view('site.cart');
})->name('cart');
