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

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/arsip', [App\Http\Controllers\ArsipController::class, 'index'])->name('arsip');

Route::get('/arsip/add', [App\Http\Controllers\ArsipController::class, 'add'])->name('arsipAdd');
Route::post('/arsip/add', [App\Http\Controllers\ArsipController::class, 'store'])->name('arsipStore');

Route::get('/arsip/edit/{id}', [App\Http\Controllers\ArsipController::class, 'edit']);
