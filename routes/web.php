<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/registrasi', [UserController::class, 'registrasi']);
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'login'])->name('login.submit');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/dashboard', function () {
    if (!session('siswa')) {
        return redirect('/')->with('error', 'Silakan login terlebih dahulu!');
    }
    return view('siswa.home');
})->name('dashboard')->middleware('web');

Route::get('/admin', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/admin/home', [AdminController::class, 'home'])->name('admin.home')->middleware('auth:admin');

Route::get('/admin/data-buku', [AdminController::class, 'data_buku'])->name('admin.data_buku')->middleware('auth:admin');
Route::get('/admin/tambah-data-buku', [AdminController::class, 'tambahDataBuku'])->name('admin.tambahDataBuku')->middleware('auth:admin');
Route::post('/admin/tambah-data-buku', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/editBuku/{kode_buku}', [AdminController::class, 'editBuku'])->name('admin.editBuku')->middleware('auth:admin');
Route::put('/admin/updateBuku/{kode_buku}', [AdminController::class, 'updateBuku'])->name('admin.updateBuku');
Route::delete('/admin/destroyBuku/{kode_buku}', [AdminController::class, 'destroyBuku'])->name('admin.destroyBuku');