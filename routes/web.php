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

Route::get('/arsip/edit/{id}', [App\Http\Controllers\ArsipController::class, 'edit'])->name('arsipEdit');
Route::post('/arsip/edit/{id}', [App\Http\Controllers\ArsipController::class, 'updateArsipData'])->name('arsipUpdate');

Route::post('/arsip/delete/{id}', [App\Http\Controllers\ArsipController::class, 'deleteArsipData'])->name('arsipDelete');


Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');


Route::get('/user/add', [App\Http\Controllers\UserController::class, 'add'])->name('userAdd');

Route::get('/user/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('userEdit');
Route::post('/user/edit/profile/{id}', [App\Http\Controllers\UserController::class, 'updateUserProfile'])->name('updateUserProfile');
Route::post('/user/edit/password/{id}', [App\Http\Controllers\UserController::class, 'updateUserPassword'])->name('updateUserPassword');

Route::post('/user/delete/{id}', [App\Http\Controllers\UserController::class, 'deleteUser'])->name('userDelete');
