<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = DB::table('anggota')->get();
        return view('admin.list_anggota', compact('anggota'));
    }

    public function publicView()
    {
        $anggota = DB::table('anggota')->get();
        return view('public.list_anggota', compact('anggota'));
    }
    public function create()
    {
        return view('admin.tambah_anggota');
    }

    public function store(Request $request)
    {
        DB::table('anggota')->insert([
            'id_anggota'        => $request->id_anggota,
            'gelar_depan'       => $request->gelar_depan,
            'nama_depan'        => $request->nama_depan,
            'nama_belakang'     => $request->nama_belakang,
            'gelar_belakang'    => $request->gelar_belakang,
            'jabatan'           => $request->jabatan,
            'status_pernikahan' => $request->status_pernikahan,
        ]);

        return redirect()->route('admin.anggota.index')->with('success', 'Anggota berhasil ditambahkan!');
    }
}
