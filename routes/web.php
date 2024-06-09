<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\staffit\AkunController;
use App\Http\Controllers\staffit\LaporanController;
use App\Http\Controllers\staffit\PersonilController;
use App\Http\Controllers\staffit\WeaponController;
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

Route::get('/', [IndexController::class, 'indexStaffIT'])->name('index')->middleware('auth');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/login', [AuthController::class, 'login'])->name('loginPost');


// Staff-IT Routes
Route::middleware(['auth', 'role:staff-it'])->prefix('staff-it')->group(function () {
    // route home
    Route::get('/', [IndexController::class, 'indexStaffIT'])->name('staff-it-index');
    // akun
    Route::get('/akun', [AkunController::class, 'index'])->name('staff-it-akun');

    // personil
    Route::get('/personil', [PersonilController::class, 'index'])->name('staff-it-personil');

    // senjata api
    Route::get('/senjata-api', [WeaponController::class, 'index'])->name('staff-it-senjata-api');

    // senjata api
    Route::get('/laporan', [LaporanController::class, 'index'])->name('staff-it-laporan');
});
