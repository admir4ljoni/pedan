<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class StrukturOrganisasi extends Controller
{
    public function index()
    {
        $guru = Guru::with('jabatan')->get();
        $jabatan = Jabatan::all();

        return view('pages.admin.StrukturOrganisasi', ['guru' => $guru, 'jabatan' => $jabatan]);
    }

    public function create(Request $request)
    {
        $guru = Guru::findOrFail($request->guru_id);
        $guru->update([
            'id_jabatan' => $request->jabatan_id
        ]);

        return redirect()->back()->with('success', 'data berhasil ditambahkan');
    }
}
