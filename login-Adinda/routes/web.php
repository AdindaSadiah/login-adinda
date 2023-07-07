<?php

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
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/login-test', function () {
    return view('login-test');
});

Route::get('/form', function () {
    return view('form');
});
Route::post('mahasiswa/simpan', [MahasiswaController::class, 'simpanMahasiswa'])->name('simpanMahasiswa')->middleware('auth');

Route::get('mahasiswa/tampil', [MahasiswaController::class, 'tampilMahasiswa'])->name('tampilMahasiswa')->middleware('auth');

Route::get('mahasiswa/tambah', [MahasiswaController::class, 'tambahMahasiswa'])->name('tambahMahasiswa')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
