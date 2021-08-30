<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TonghopController;
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
//login routes
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/home', [LoginController::class, 'process'])->name('login-process');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware([CheckLogin::class])->group(function () {
    Route::get('/home', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('index/{idL}/{idSV}', [TonghopController::class, 'index'])->name('index');
    Route::get('diem-sinh-vien/{idL}/{idSV}/{tenSV}', [TonghopController::class, 'diemsinhvien'])->name('diemsinhvien');
    Route::get('diem-thi-lai/{idL}/{tenMH}/{idMH}', [TonghopController::class, 'diemthilai'])->name('diemthilai');
});