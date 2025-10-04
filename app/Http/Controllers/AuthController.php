<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController 
{

    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'id' => 'required',
            'password' => 'required',
        ]);

        $username = $request->input('id');
        $password = $request->input('password');

        $user = DB::table('pengguna')->where('username', $username)->first();

        if ($user && Hash::check($password, $user->password)) {
            session(['user' => $user]);

            if ($user->role === 'Admin') {
                return redirect('/admin');
            } else {
                return redirect('/public');
            }
        }

        return back()->with('error', 'Username atau password salah!');
    }

    public function logout()
    {
        session()->forget('user');
        return redirect('/login');
    }
}
