<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\DisetujuiController;
use App\Http\Controllers\DitolakController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;

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

Route::get('/login', [AuthController::class, 'login']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::prefix('/pengajuan')->group(function (){
    // pengajuan file
    Route::get('/', [PengajuanController::class, 'index']);
    Route::get('/tambah', [PengajuanController::class, 'tambah']);
    Route::get('/edit', [PengajuanController::class, 'edit']);

    // file disetujui
    Route::get('/disetujui', [DisetujuiController::class, 'index']);

    // file ditolak
    Route::get('/ditolak', [DitolakController::class, 'index']);
    Route::get('/ditolak/detail', [DitolakController::class, 'detail']);
});

Route::get('tambahPengguna', [UsersController::class, 'tambah']);