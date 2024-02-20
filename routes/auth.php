<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ProviderController;

Route::get('/login/sign-in/signOnV2Screen.go', [ProviderController::class, 'index'])->name('login');