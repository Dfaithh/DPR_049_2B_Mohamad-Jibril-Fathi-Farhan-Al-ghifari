<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    public function index()
    {
        // ambil semua data dari tabel anggota
        $anggota = DB::table('anggota')->get();

        return view('admin.list_anggota', compact('anggota'));
    }
}
