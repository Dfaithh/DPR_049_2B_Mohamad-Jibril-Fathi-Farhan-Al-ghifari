<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Halaman login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Proses login
Route::post('/login', function (Request $request) {
    $username = $request->input('id');
    $password = $request->input('password');

    $user = DB::table('pengguna')->where('username', $username)->first();

    if ($user && Hash::check($password, $user->password)) {
        session(['user' => $user]);

        // arahkan sesuai role
        if ($user->role === 'Admin') {
            return redirect('/admin');
        } else {
            return redirect('/public');
        }

    } else {
        return back()->with('error', 'Username atau Password salah!');
    }
});

// Halaman logout
Route::get('/logout', function () {
    session()->forget('user');
    return redirect('/login');
});

// Halaman admin
Route::get('/admin', function () {
    if (!session()->has('user') || session('user')->role !== 'Admin') {
        return redirect('/login');
    }

    return view('admin');
});

// Halaman public (citizen)
Route::get('/public', function () {
    if (!session()->has('user') || session('user')->role !== 'Public') {
        return redirect('/login');
    }

    return view('public');
});
