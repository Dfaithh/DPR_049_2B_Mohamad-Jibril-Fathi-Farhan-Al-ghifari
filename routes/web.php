<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnggotaController; 

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

// admin
Route::get('/admin', function () {
    if (!session()->has('user') || session('user')->role !== 'Admin') {
        return redirect('/login');
    }
    return view('admin');
});
Route::get('/admin/anggota', [AnggotaController::class, 'index'])->name('anggota.index');

// public
Route::get('/public/anggota', [AnggotaController::class, 'publicView'])->name('public.anggota.index');
Route::get('/public', function () {
    if (!session()->has('user') || session('user')->role !== 'Public') {
        return redirect('/login');
    }
    return view('public');
});
