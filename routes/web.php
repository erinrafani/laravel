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
    return view('welcome');
});
route::get('/about', function () {
    return '<h1>halo</h1>' .
        'selamat datang di webapp saya<br>'
        . 'laravel,emang keren.';
});

Route::get('/name', function () {
    return view('name');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/hobi', function () {
    return view('hobi');
});
Route::get('/cita', function () {
    return view('cita');
});

Route::get('/teman', function () {
    return view('teman');
});
