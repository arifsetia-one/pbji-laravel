<?php

use Illuminate\Support\Facades\Route;

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
    return view('homeNonUser');
})->name('homeNonUser');

Route::get('/homeUser', function () {
    return view('homeUser');
})->name('homeUser');

Route::get('/presence', function () {
    return view('presence');
})->name('presence');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/login', function () {
    return view('login');
})->name('login');
