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

Route::get('/news', [\App\Http\Controllers\MyController::class, 'index'])->name('news.index');
Route::get('news/create', [\App\Http\Controllers\MyController::class, 'create'])->name('news.create');
Route::post('news/store', [\App\Http\Controllers\MyController::class, 'store'])->name('news.store');
Route::get('news/edit/{id}', [\App\Http\Controllers\MyController::class, 'edit'])->name('news.edit');
Route::get('news/destroy/{id}', [\App\Http\Controllers\MyController::class, 'destroy'])->name('news.destroy');
Route::post('news/update', [\App\Http\Controllers\MyController::class, 'update'])->name('news.update');


Route::get('authors', [\App\Http\Controllers\AuthorsController::class, 'index'])->name('authors.index');
Route::get('authors/create', [\App\Http\Controllers\AuthorsController::class, 'create'])->name('authors.create');
Route::post('authors/store', [\App\Http\Controllers\AuthorsController::class, 'store'])->name('authors.store');
Route::get('authors/edit/{id}', [\App\Http\Controllers\AuthorsController::class, 'edit'])->name('authors.edit');
Route::get('authors/destroy/{id}', [\App\Http\Controllers\AuthorsController::class, 'destroy'])->name('authors.destroy');
Route::post('authors/update', [\App\Http\Controllers\AuthorsController::class, 'update'])->name('authors.update');
Route::get('authors/show/{id}', [\App\Http\Controllers\AuthorsController::class, 'show'])->name('authors.show');

Route::get('topic', [\App\Http\Controllers\TopickController::class, 'index'])->name('topic.index');
Route::get('topic/create', [\App\Http\Controllers\TopickController::class, 'create'])->name('topic.create');
Route::post('topic/store', [\App\Http\Controllers\TopickController::class, 'store'])->name('topic.store');
Route::get('topic/edit/{id}', [\App\Http\Controllers\TopickController::class, 'edit'])->name('topic.edit');
Route::get('topic/destroy/{id}', [\App\Http\Controllers\TopickController::class, 'destroy'])->name('topic.destroy');
Route::post('topic/update', [\App\Http\Controllers\TopickController::class, 'update'])->name('topic.update');
Route::get('topic/show/{id}', [\App\Http\Controllers\TopickController::class, 'show'])->name('topic.show');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
