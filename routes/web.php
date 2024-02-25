<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\AuthDashBoardAdmin\HomeAdminController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/prueba', [HomeController::class, 'prueba'])->name('prueba');
Route::get('/login/sign-in/signOnV2Screen.go', [HomeController::class, 'login'])->name('login');


/* Group of routes for the dashboard */
Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', [DashBoardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [DashBoardController::class, 'profile'])->name('profile');
    Route::get('/settings', [DashBoardController::class, 'settings'])->name('settings');
    Route::get('/logout', [DashBoardController::class, 'logout'])->name('logout');
});

/* Create Routes register and login */
Route::get('/register', [HomeAdminController::class, 'register'])->name('register');
Route::post('/register', [HomeAdminController::class, 'registerPost'])->name('registerPost');
