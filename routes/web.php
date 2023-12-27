<?php

use App\Http\Controllers\AnakelangController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('auth.dashboard');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/anakelang', [AnakelangController::class, 'index']);
Route::get('/daftarbaru', [AnakelangController::class, 'formdaftarbaru']);
Route::post('/daftarbaru', [AnakelangController::class, 'storeanakbaru']);
