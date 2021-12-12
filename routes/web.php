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
    return view('beranda');
});

Route::get('/data', function () {
    return view('data');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/regis', function () {
    return view('regis');
});

Route::get('/crud', function () {
    return view('crud');
});

Route::get('/update', function () {
    return view('update');
});

Route::get('/hapus', function () {
    return view('hapus');
});

Route::get('/input', function () {
    return view('input');
});

Route::get('/updateprog', function () {
    return view('updateprog');
});