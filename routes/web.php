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
Route::get('/yayasan', function () {
    return view('latihanerin/yayasan');
});

Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null, $minuman = null, $cemilan = null) {

    if ($makanan && $minuman && $cemilan != null) {
        return "Anda memesan Makanan = $makanan <br>
                Anda memesan Minuman = $minuman <br>
                Anda memesan Cemilan = $cemilan";
    } else if ($makanan && $minuman != null) {
        return "Anda memesan Makanan = $makanan <br>
                Anda memesan Minuman = $minuman";
    } else if ($makanan || $minuman != null) {
        return $makanan != null ? "Anda memesan makanan : $makanan" : "Anda memesan minuman : $minuman";
    } else {
        return "Anda tidak memesan silahkan pulang";
    }

});
