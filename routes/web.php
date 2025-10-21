<?php
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('guest')->group(function(){
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('showlogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');
});


Route::middleware('auth')->group(function(){
Route::get('/dashboard', function() { 
    return view('dashboard.admin');
})->name('dashboard.admin');
});



Route::get('/password-change', function(){
    return view('user.passChange');
})->name('passChange');