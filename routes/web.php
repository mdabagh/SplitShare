<?php

use App\Http\Controllers\AuthController;
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

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');
Route::get('/auth/google/redirect', [AuthController::class, 'googleRedirect'])->name('login.google.redirect');
Route::get('/auth/google/callback', [AuthController::class, 'googleCallback'])->name('login.google.callback');

Route::get('/auth/github/redirect', [AuthController::class, 'githubRedirect'])->name('login.github.redirect');
Route::get('/auth/github/callback', [AuthController::class, 'githubCallback'])->name('login.github.callback');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('home');

});


