<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auths\ProviderController;

Route::get('/login/sign-in/signOnV2Screen.go', [ProviderController::class, 'index'])->name('login');