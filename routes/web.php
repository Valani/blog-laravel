<?php

use App\Http\Controllers\Admin\Main\IndexController as AdminIndex;
use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(IndexController::class)->group(function () {
    Route::get('/', '__invoke');
});

Route::prefix('admin')->group(function () {
    Route::controller(AdminIndex::class)->group(function () {
        Route::get('/', '__invoke');
    });
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
