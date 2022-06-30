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
    return view('auth/login');
})->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('data_peminjam', 'App\Http\Controllers\DataPeminjamController@index')->name('data_peminjam');
Route::get('/data_peminjam/create', 'App\Http\Controllers\DataPeminjamController@create')->name('data_peminjam.create');
Route::get('/data_peminjam/store', 'App\Http\Controllers\DataPeminjamController@store')->name('data_peminjam.store');
Route::post('/data_peminjam/store', 'App\Http\Controllers\DataPeminjamController@store')->name('data_peminjam.store');
Route::get('/data_peminjam/search', 'App\Http\Controllers\DataPeminjamController@search')->name('data_peminjam.search');
Route::get('/data_peminjam/edit/{id}', 'App\Http\Controllers\DataPeminjamController@edit')->name('data_peminjam.edit');
Route::post('/data_peminjam/update/{id}', 'App\Http\Controllers\DataPeminjamController@update')->name('data_peminjam.update');
Route::post('/data_peminjam/delete/{id}', 'App\Http\Controllers\DataPeminjamController@destroy')->name('data_peminjam.destroy');

Route::get('buku', 'App\Http\Controllers\BukuController@index')->name('buku');
Route::get('buku/create', 'App\Http\Controllers\BukuController@create')->name('buku.create');
Route::post('buku', 'App\Http\Controllers\BukuController@store')->name('buku.store');
Route::get('buku/edit/{id}', 'App\Http\Controllers\BukuController@edit')->name('buku.edit');
Route::post('buku/update/{id}', 'App\Http\Controllers\BukuController@update')->name('buku.update');
Route::post('buku/delete/{id}', 'App\Http\Controllers\BukuController@destroy')->name('buku.destroy');

Route::get('peminjaman', 'App\Http\Controllers\PeminjamanController@index')->name('peminjaman');
Route::get('/peminjaman/create', 'App\Http\Controllers\PeminjamanController@create')->name('peminjaman.create');
Route::post('/peminjaman/create', 'App\Http\Controllers\PeminjamanController@store')->name('peminjaman.store');
Route::get('/peminjaman/detail_peminjam/{id}', 'App\Http\Controllers\PeminjamanController@detail_peminjam')->name('peminjaman.detail_peminjam');
Route::get('/peminjaman/detail_buku/{id}', 'App\Http\Controllers\PeminjamanController@detail_buku')->name('peminjaman.detail_buku');

Route::get('user', 'App\Http\Controllers\UserController@index')->name('user');
Route::get('user/create', 'App\Http\Controllers\UserController@create')->name('user.create');
Route::post('user/store', 'App\Http\Controllers\UserController@store')->name('user.store');
Route::get('user/edit/{id}', 'App\Http\Controllers\UserController@edit')->name('user.edit');
Route::post('user/update/{id}', 'App\Http\Controllers\UserController@update')->name('user.update');
Route::post('user/destroy/{id}', 'App\Http\Controllers\UserController@destroy')->name('user.destroy');

require __DIR__.'/auth.php';
