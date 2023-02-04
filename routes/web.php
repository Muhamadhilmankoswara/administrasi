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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/tes', function () {
    return view('Layouts.master');
});


//route CRUD
Route::get('/surat','SuratController@index');

Route::get('/surat/tambah','SuratController@tambah');

Route::post('/surat/store','SuratController@store');

Route::get('/surat/edit/{id}','SuratController@edit');

Route::post('/surat/update','SuratController@update');

Route::get('/surat/hapus/{id}','SuratController@hapus');

//route CRUD
Route::get('/keluar','KeluarController@index');

Route::get('/keluar/tambahh','KeluarController@tambahh');

Route::post('/keluar/storee','KeluarController@storee');

Route::get('/keluar/editt/{id}','KeluarController@editt');

Route::post('/keluar/update','KeluarController@update');

Route::get('/keluar/hapus/{id}','KeluarController@hapus');

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', function () {
  \Auth::logout();
  return redirect('/home');
});

