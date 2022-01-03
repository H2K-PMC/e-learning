<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [AuthController::class, 'dangNhap'])->name('dang-nhap');
Route::post('/', [AuthController::class,'xlDangNhap'] )->name('xl-dang-nhap');
Route::get('/dang-xuat', [AuthController::class, 'dangXuat'])->name('dang-xuat');
Route::get('/dang-ky', [AuthController::class, 'dangKy'] )->name('dang-ky');
Route::post('/dang-ky', [AuthController::class, 'xlDangKy'] )->name('xl-dang-ky');

// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/', [AdminController::class,'index'])->name('admin.index');
// });

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class,'index'])->name('admin.index')->middleware('auth');

    Route::get('/ql-sinh-vien', [AdminController::class,'indexSinhVien'])->name('admin.qlSinhVien');
    Route::post('/ql-sinh-vien/them', [AdminController::class,'themSinhVien'])->name('admin.themSinhVien');

    Route::get('/ql-sinh-vien/cap-nhat/{id}', [AdminController::class,'capNhatSinhVien'])->name('admin.capNhatSinhVien');
    Route::post('/ql-sinh-vien/cap-nhat/{id}', [AdminController::class,'xlCapNhatSinhVien'])->name('admin.xlCapNhatSinhVien');

    Route::get('/ql-sinh-vien/xoa/{id}', [AdminController::class,'xoaSinhVien'])->name('admin.xoaSinhVien');
});