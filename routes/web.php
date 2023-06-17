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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/lowongandetail/{id}', [App\Http\Controllers\HomeController::class, 'show']);

Route::group(['middleware' => ['auth']], function () {

    Route::group(['middleware' => ['cekrole:user']], function () {
        Route::get('/home', [App\Http\Controllers\UserController::class, 'beranda']);
        Route::get('/riwayat/{id}', [App\Http\Controllers\UserController::class, 'riwayat']);
        Route::get('/cv/{cv}', [App\Http\Controllers\UserController::class, 'viewCv']);
        Route::get('/transkrip/{transkrip}', [App\Http\Controllers\UserController::class, 'viewTranskrip']);
        // User Apply
        Route::get('/apply/{id}', [App\Http\Controllers\LamaranController::class, 'index']);
        Route::post('/applyjob', [App\Http\Controllers\LamaranController::class, 'store']);
    });

    Route::group(['middleware' => ['cekrole:unit']], function () {
        Route::get('/home', [App\Http\Controllers\KepalaUnit::class, 'beranda']);
        Route::get('/datalowongan', [App\Http\Controllers\KepalaUnit::class, 'datalowongan']);
        Route::get('/formlowongan', [App\Http\Controllers\KepalaUnit::class, 'formlowongan']);
        Route::get('/formEditLowongan/{id}', [App\Http\Controllers\KepalaUnit::class, 'formeditLowongan']);
        Route::get('/delete/{id}', [App\Http\Controllers\KepalaUnit::class, 'deletelowongan']);

        Route::post('/addlowongan', [App\Http\Controllers\KepalaUnit::class, 'addlowongan']);
        Route::post('/editlowongan/{id}', [App\Http\Controllers\KepalaUnit::class, 'editlowongan']);

        // Liat Pelamar
        Route::get('/pelamar', [App\Http\Controllers\KepalaUnit::class, 'showPelamar']);
        Route::get('/cvAdmin/{cv}', [App\Http\Controllers\KepalaUnit::class, 'viewCv']);
        Route::get('/transkripAdmin/{transkrip}', [App\Http\Controllers\KepalaUnit::class, 'viewTranskrip']);
    });

});
// Route::group(['middleware' => ['cekrole:admin']], function () {
//     Route::get('/home', [App\Http\Controllers\AdminController::class, 'beranda']);
// });

Auth::routes();
