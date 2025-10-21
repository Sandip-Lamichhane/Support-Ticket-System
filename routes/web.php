<?php
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('ShowLogin');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function() {
    return view('dashboard.admin');
})->name('dashboard.admin')->middleware('checklogin');

Route::get('/password-change', function(){
    return view('user.passChange');
})->name('passChange');

// Handle the password update
// Route::put('/password-change',)