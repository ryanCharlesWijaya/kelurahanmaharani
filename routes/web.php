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
    return view('landing2');
});

Auth::routes();

Route::get('/home', function() {
	return redirect('landing2');
})->name('home');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::name('arsip.')->group(function () {
    Route::get('/arsip', [App\Http\Controllers\ArsipController::class, 'index'])->name('index');

    Route::get('/arsip/create', [App\Http\Controllers\ArsipController::class, 'create'])->name('create');
	Route::post('/arsip', [App\Http\Controllers\ArsipController::class, 'store'])->name('store');

	Route::get('/arsip/{id}/edit', [App\Http\Controllers\ArsipController::class, 'edit'])->name('edit');
	Route::post('/arsip/info/{id}', [App\Http\Controllers\ArsipController::class, 'updateInfo'])->name('updateInfo');
	Route::post('/arsip/file/{id}', [App\Http\Controllers\ArsipController::class, 'updateFile'])->name('updateFile');

	Route::post('/arsip/delete/{id}', [App\Http\Controllers\ArsipController::class, 'delete'])->name('delete');
});

Route::name('user.')->group(function () {
    Route::get('/user/', [App\Http\Controllers\UserController::class, 'index'])->name('index');

    Route::get('/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('create');

	Route::get('/user/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('edit');
	Route::post('/user/info/{id}', [App\Http\Controllers\UserController::class, 'updateInfo'])->name('updateInfo');
	Route::post('/user/password/{id}', [App\Http\Controllers\UserController::class, 'updatePassword'])->name('updatePassword');
	
	Route::post('/user/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('delete');
});