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

Route::get('/news', [\App\Http\Controllers\MyController::class, 'index'])->name('news.index');
//Route::get('news/create', 'MyController@create')->name('news.create');
Route::get('news/create', [\App\Http\Controllers\MyController::class, 'create'])->name('news.create');
Route::post('news/store', [\App\Http\Controllers\MyController::class, 'store'])->name('news.store');
Route::get('news/edit/{id}', [\App\Http\Controllers\MyController::class, 'edit'])->name('news.edit');
Route::get('news/destroy/{id}', [\App\Http\Controllers\MyController::class, 'destroy'])->name('news.destroy');
Route::get('news/update/{id}', [\App\Http\Controllers\MyController::class, 'update'])->name('news.update');

