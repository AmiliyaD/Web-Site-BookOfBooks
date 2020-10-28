<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'get'])->name('main');

Route::get('/allAutors', [MainController::class, 'allAutors'])->name('allAutors');
Route::get('/search', [MainController::class, 'search'])->name('search');
Route::get('/reg', [MainController::class, 'reg'])->name('reg');
Route::get('/add', [MainController::class, 'add'])->name('add');
Route::get('/enter', [MainController::class, 'enter'])->name('enter');
Route::get('/allWorks', [MainController::class, 'allWorks'])->name('allWorks');
Route::get('/workText', [MainController::class, 'getText'])->name('workText');
Route::post('add/check', [MainController::class, 'rewiew_check'])->name('add/check');
Route::get('new_home', [MainController::class, 'get_text'])->name('new_home');
Route::get('/addText',[MainController::class, 'get_par'] )->name('addText');
Route::get('/addPar', [MainController::class, 'add_par'])->name('addPar');

Route::post('upd/check', [MainController::class, 'update'])->name('upd/check');
Route::post('asd', [MainController::class, 'addText'])->name('asd');

Route::get('/editchapter', [MainController::class, 'edit_chapter'])->name('chapter');

Route::post('check', [MainController::class, 'update_pars'])->name('check');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
