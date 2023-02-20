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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
Route::get('/manager', [App\Http\Controllers\HomeController::class, 'manager'])->name('manager');

Route::get('/delete', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');
Route::get('/delete_denies', [App\Http\Controllers\HomeController::class, 'delete_denies'])->name('delete_denies');
Route::get('/check_authorized_admin', [App\Http\Controllers\HomeController::class, 'check_authorized_admin'])->name('check_authorized_admin');
Route::get('/check_authorized_user', [App\Http\Controllers\HomeController::class, 'check_authorized_user'])->name('check_authorized_user');
Route::get('/check_authorized_manager', [App\Http\Controllers\HomeController::class, 'check_authorized_manager'])->name('check_authorized_manager');

Route::get('/test', [App\Http\Controllers\HomeController::class, 'test'])->middleware('can:isAdmin')->name('test');
