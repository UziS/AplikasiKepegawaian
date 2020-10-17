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
    return view('auth.login');
});

Auth::routes();


Route::get('/profile/{id}', 'ProfileController@edit')->name('profile.edit');
Route::PATCH('/profile/{id}', 'ProfileController@update')->name('profile.update');
// Route::get('/da', 'HomeController@index')->name('home');

//datapegawai
Route::get('/datapegawai', 'DatapegawaiController@index')->name('datapegawai');
Route::get('/datapegawai/tambah','DatapegawaiController@create')->name('create.pegawai');
Route::post('/datapegawai/tambah', 'DatapegawaiController@store')->name('store.pegawai');
Route::get('/datapegawai/edit/{id}', 'DatapegawaiController@edit')->name('edit.pegawai');
Route::patch('/datapegawai/{id}', 'DatapegawaiController@update')->name('update.pegawai');
Route::delete('/datapegawai/{id}', 'DatapegawaiController@destroy')->name('destroy.pegawai');
Route::get('/datapegawai/show/{id}', 'DatapegawaiController@show')->name('show.pegawai');
Route::get('/get-pesan', 'DatapegawaiController@pesan');