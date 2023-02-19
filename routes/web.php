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
    return view('main.index');
});
Route::get('/login', function () {
    return view('main.login');
});
Route::get('/tabel-judul', function () {
    return view('main.tabel-judul');
});
Route::get('/tabel-proposal', function () {
    return view('main.tabel-proposal');
});
Route::get('/tabel-hasil', function () {
    return view('main.tabel-hasil');
});
Route::get('/tabel-skripsi', function () {
    return view('main.tabel-skripsi');
});
