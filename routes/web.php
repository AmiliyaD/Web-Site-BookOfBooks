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