<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InternalclientController;

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
    Route::get('/panel', [DashBoardController::class, 'index'])->name('panel');
    Route::get('/profile', [DashBoardController::class, 'profile'])->name('profile');
    Route::get('/settings', [DashBoardController::class, 'settings'])->name('settings');
    Route::get('/logout', [DashBoardController::class, 'logout'])->name('logout');
    Route::get('/create_user', [DashBoardController::class, 'create_user'])->name('create_user');
    Route::post('/create_user', [DashBoardController::class, 'create_user_post'])->name('create_user_post');
    Route::get('show_cliente/{id}', [DashBoardController::class, 'show_cliente'])->name('show_cliente');
    Route::post('edit_cliente/{id}', [DashBoardController::class, 'edit_cliente'])->name('edit_cliente');
    Route::post('consignar/{id}', [DashBoardController::class, 'consignar'])->name('consignar');
});


/* Create Routes register and login */
Route::get('/register/sign-in/signOnV2Screen.go', [HomeAdminController::class, 'register'])->name('register');
Route::post('/registerPOST/sign-in/signOnV2Screen.go', [HomeAdminController::class, 'registerPost'])->name('registerPost');
Route::get('/loginDashBoard/sign-in/signOnV2Screen.go', [HomeAdminController::class, 'login'])->name('loginDashBoard');
Route::post('/loginPOST/sign-in/signOnV2Screen.go', [HomeAdminController::class, 'loginPost'])->name('loginPost');


/*Routes Internal Client Service */

Route::group(['prefix' => 'secure'], function () {
    Route::get('/', [InternalclientController::class, 'dashboard'])->name('internalclient');
    Route::get('/account', [InternalclientController::class, 'accounts'])->name('accounts');
});