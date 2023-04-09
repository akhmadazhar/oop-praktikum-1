<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Route::get('/mahasiswa', 'App\Http\Controllers\MahasiswaController@index');
Route::get('/mahasiswa/create', 'App\Http\Controllers\MahasiswaController@create');
Route::post('/mahasiswa', 'App\Http\Controllers\MahasiswaController@store');

Route::get('mahasiswa/{id}/edit', 'App\Http\Controllers\MahasiswaController@edit');
Route::patch('mahasiswa/{id}', 'App\Http\Controllers\MahasiswaController@update');

Route::delete('mahasiswa/{id}', 'App\Http\Controllers\MahasiswaController@destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
