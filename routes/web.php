<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Front\MainController;
use App\Http\Controllers\Admin\AdminPanelMainController;
use App\Http\Controllers\Admin\UserController;


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

Auth::routes();

// Front

Route::get('/', [MainController::class, 'index'])->name('mainPage');

Route::get('/home', [HomeController::class, 'index'])->name('home');


// Admin

Route::prefix('admin')->name('admin.')->middleware('admin')->group(function ()
{
    Route::get('/', [AdminPanelMainController::class, 'index'])->name('dashboard');

    Route::resource('/users', UserController::class)->only(['index', 'destroy', 'edit', 'update']);
//    Route::resource('/users', UserController::class)->only(['index', 'destroy']);
//    Route::get('/users', [UserController::class, 'index'])->name('users');
}
);



