<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PersetujuanController;
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
Route::get('/logout', [AuthController::class, 'logout']);

Route::prefix('/user')->group(function (){

    // dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);
    
    // pengajuan
    Route::get('/submissions', [PengajuanController::class, 'index']);
    Route::get('/submissions/create', [PengajuanController::class, 'create']);
    Route::get('/submissions/edit', [PengajuanController::class, 'edit']);
    Route::get('/submissions/delete', [PengajuanController::class, 'delete']);
    
    // disetujui
    Route::get('/approved', [DisetujuiController::class, 'index']);
    Route::get('/approved/delete', [DisetujuiController::class, 'delete']);
    
    // ditolak
    Route::get('/rejected', [DitolakController::class, 'index']);
    Route::get('/rejected/detail', [DitolakController::class, 'detail']);
});
// Route::get('/admin/dashboard', [DashboardController::class, 'index']);
// Route::get('/superadmin/dashboard', [DashboardController::class, 'index']);

Route::prefix('/admin')->group(function (){
    
    // dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // persetujuan
    Route::get('/agreement', [PersetujuanController::class, 'index']);
    Route::get('/agreement/detail', [PersetujuanController::class, 'detail']);
    Route::get('/agreement/rejected', [PersetujuanController::class, 'rejected']);
    
    
    // pengajuan
    Route::get('/submissions', [PengajuanController::class, 'index']);
    Route::get('/submissions/detail', [PengajuanController::class, 'detail']);
    
    // disetujui
    Route::get('/approved', [DisetujuiController::class, 'index']);
    Route::get('/approved/download', [DisetujuiController::class, 'download']);
    Route::get('/approved/delete', [DisetujuiController::class, 'delete']);
    
    // ditolak
    Route::get('/rejected', [DitolakController::class, 'index']);
    
    // user
    Route::get('/user', [UsersController::class, 'index']);
    Route::get('/user/create', [UsersController::class, 'create']);
    Route::get('/user/edit', [UsersController::class, 'edit']);
    Route::get('/user/delete', [UsersController::class, 'delete']);
});

Route::prefix('/superAdmin')->group(function (){
    
    // dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);
    
    // persetujuan
    Route::get('/agreement', [PersetujuanController::class, 'index']);
    Route::get('/agreement/detail', [PersetujuanController::class, 'index']);
    Route::get('/agreement/rejected', [PersetujuanController::class, 'rejected']);
    
    // pengajuan
    Route::get('/submissions', [PengajuanController::class, 'index']);
    Route::get('/submissions/detail', [PengajuanController::class, 'detail']);
    
    // disetujui
    Route::get('/approved', [DisetujuiController::class, 'index']);
    Route::get('/approved/download', [DisetujuiController::class, 'download']);
    Route::get('/approved/delete', [DisetujuiController::class, 'delete']);
    
    // ditolak
    Route::get('/rejected', [DitolakController::class, 'index']);
});
