<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

Auth::routes();
Route::get('/users-list', [UserController::class, 'index'])->name('users-list');
Route::get('/orders-list', [OrderController::class, 'index'])->name('orders-list');
Route::get('/menus-list', [MenuController::class, 'index'])->name('menus-list');

Route::get('/home', [App\Http\Controllers\MenuController::class, 'slider'])->name('home');

Auth::routes();

Route::get('admin/home', [HomeController::class, 'dashboardPage'])->name('admin.home')->middleware('is_admin');
