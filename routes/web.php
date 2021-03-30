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

Route::get('topics', [\App\Http\Controllers\TopicController::class, 'index'])->name('topics.index');
Route::get('topics/create', [\App\Http\Controllers\TopicController::class, 'create'])->name('topics.create');
Route::post('topics/store', [\App\Http\Controllers\TopicController::class, 'store'])->name('topics.store');
Route::get('topics/edit/{id}', [\App\Http\Controllers\TopicController::class, 'edit'])->name('topics.edit');
Route::get('topics/destroy/{id}', [\App\Http\Controllers\TopicController::class, 'destroy'])->name('topics.destroy');
Route::post('topics/update', [\App\Http\Controllers\TopicController::class, 'update'])->name('topics.update');
Route::get('topics/show/{id}', [\App\Http\Controllers\TopicController::class, 'show'])->name('topics.show');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
