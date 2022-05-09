<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\DatabaseController;

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
    return view('main/index');
});

Auth::routes();

Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/plan', [HomeController::class, 'planIndex'])->name('plan');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('/contact/confirm', [ContactController::class, 'send'])->name('contact.send');

Route::get('/work/{id}', [WorkController::class, 'index'])->name('work');
Route::get('/work{id}/top', [WorkController::class, 'index'])->name('work.top');
Route::get('/work{id}/about', [WorkController::class, 'aboutIndex'])->name('about');
Route::get('/work{id}/photo', [WorkController::class, 'photoIndex'])->name('photo');
Route::get('/work{id}/ec', [WorkController::class, 'ecIndex'])->name('ec');
Route::get('/work{id}/location', [WorkController::class, 'locationIndex'])->name('location');
Route::get('/work{id}/contact', [WorkController::class, 'contactIndex'])->name('contact');

Route::get('/work{id}/articles', [ArticlesController::class, 'articlesIndex'])->name('articles');
Route::get('/work{id}/article/{article_id}',  [ArticlesController::class, 'articleIndex'])->name('article');


Route::get('/private', [DatabaseController::class, 'privateIndex'])->middleware('auth')->name('private');
Route::get('/private/new', [DatabaseController::class, 'newIndex'])->middleware('auth')->name('new.article');
Route::get('/private/edit/{article_id}', [DatabaseController::class, 'editIndex'])->middleware('auth')->name('edit.article');

Route::get('/private/delete/{article_id}', [ArticlesController::class, 'delete'])->middleware('auth')->name('delete.article');

Route::post('/private/new', [App\Http\Controllers\ArticlesController::class, 'create'])->name('create.new.article');
Route::post('/private/edit/{article_id}', [App\Http\Controllers\ArticlesController::class, 'update'])->name('update.article');


