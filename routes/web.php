<?php
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');

Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->name('dashboard')->middleware('auth');

Route::get('/password-change', function(){
    return view('user.passChange');
})->name('passChange');

// Handle the password update
// Route::put('/password-change',)