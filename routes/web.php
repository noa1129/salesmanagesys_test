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

Route::get('/list', [App\Http\Controllers\ProductsController::class, 'index'])->name('list');
Route::get('/create', [App\Http\Controllers\ProductsCreateController::class, 'create'])->name('create');
Route::get('/edit', [App\Http\Controllers\ProductsEditController::class, 'create'])->name('edit');
Route::get('/detail', [App\Http\Controllers\ProductsDetailController::class, 'create'])->name('detail');
