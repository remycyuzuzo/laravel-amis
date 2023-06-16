<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    });

    Route::get('/client-register', function () {
        return view('customers.register-customer');
    });
});

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'renderLogin'])->name('login');
    Route::post('/login', [LoginController::class, 'loginUser']);
});
