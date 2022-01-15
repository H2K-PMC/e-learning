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

Route::get('quen-mat-kau', [AuthController::class, 'quenMatKhau'])->name('quen-mat-khau');
Route::post('quen-mat-kau', [AuthController::class, 'xlQuenMatKhau'])->name('xl-quen-mat-khau');
Route::get('doi-mat-kau/{token}', [AuthController::class, 'doiMatKhau'])->name('doi-mat-khau');
Route::post('doi-mat-kau', [AuthController::class, 'xlDoiMatKhau'])->name('xl-doi-mat-khau');

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class,'index'])->name('admin.index')->middleware('auth');

    Route::get('/ql-sinh-vien', [AdminController::class,'indexSinhVien'])->name('admin.qlSinhVien');
    Route::post('/ql-sinh-vien/them', [AdminController::class,'themSinhVien'])->name('admin.themSinhVien');
    Route::post('/ql-sinh-vien/cap-nhat', [AdminController::class,'xlCapNhatSinhVien'])->name('admin.xlCapNhatSinhVien');
    Route::post('/ql-sinh-vien/xoa', [AdminController::class,'xoaSinhVien'])->name('admin.xoaSinhVien');

    Route::get('/ql-giang-vien', [AdminController::class,'indexGiangVien'])->name('admin.qlGiangVien');
    Route::post('/ql-giang-vien/them', [AdminController::class,'themGiangVien'])->name('admin.themGiangVien');
    Route::post('/ql-giang-vien/cap-nhat', [AdminController::class,'xlCapNhatGiangVien'])->name('admin.xlCapNhatGiangVien');
    Route::post('/ql-giang-vien/xoa', [AdminController::class,'xoaGiangVien'])->name('admin.xoaGiangVien');
});