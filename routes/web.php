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

Route::group(['middleware' => ['cekrole:0']], function () {
    Route::get('/home', [App\Http\Controllers\UserController::class, 'beranda']);
});

Route::group(['middleware' => ['cekrole:1']], function () {
    Route::get('/home', [App\Http\Controllers\AdminController::class, 'beranda']);
});
Auth::routes();

