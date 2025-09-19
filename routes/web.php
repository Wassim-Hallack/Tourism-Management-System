<?php

use App\Http\Controllers\FeedBackController;
use App\Http\Controllers\GoogleController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/google', [GoogleController::class, 'loginWithGoogle'])->name('login');
Route::get('auth/google/callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');

Route::get('home', function () {
    return view('home');
})->name('home');


Route::get('send_email', [FeedBackController::class, 'send_email'])->name('send_email');
