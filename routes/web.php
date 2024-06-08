<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/login', [AuthController::class, 'login'])->name('loginPost');

Route::get('/staff-it', function () {
    return 'Staff IT Page';
})->middleware('role:staff-it');

// Just For Preview UI
// Admin Routes
Route::get('/admin',[IndexController::class, 'admin'])->name('index');
Route::get('/admin/akun',[IndexController::class, 'account'])->name('akun');
Route::get('/admin/personil',[IndexController::class, 'personil'])->name('personil');
Route::get('/admin/senjata-api',[IndexController::class, 'weapon'])->name('senjata-api');
