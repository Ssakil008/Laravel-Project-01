<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/loginUser', [AuthController::class, 'loginUser'])->name('loginUser');
Route::get('/register', [AuthController::class, 'registration'])->name('register');
Route::post('/registerUser', [AuthController::class, 'registerUser'])->name('registerUser');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::group(['middleware' => 'auth'], function(){
    Route::get('/profile', function(){
        return 'HI';
    });
});

