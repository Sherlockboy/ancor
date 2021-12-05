<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'dashboard'])->name('dashboard');
Route::get('/transactions', [PagesController::class, 'transactions'])->name('transactions');
Route::get('/users', [PagesController::class, 'users'])->name('users');
Route::get('/user', [PagesController::class, 'user'])->name('user');
