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

    public function show(string $id)
    {
        $guru = Guru::with('jabatan')->findOrFail($id);

        return response()->json($guru);
    }

    public function update(Request $request)
    {
        $guru = Guru::findOrFail($request->guru_id);

        $request->validate([
            'editNama' => 'required|string|max:255',
            'editJabatan_id' => 'required|exists:jabatans,id'
        ]);

        $guru->update([
            'nama' => $request->editNama,
            'id_jabatan' => $request->editJabatan_id,
        ]);

        return redirect()->back()->with('Success', 'data berhasil diubah');
    }

    public function delete(Request $request)
    {
        $guru = Guru::findOrFail($request->guru_id);
        $guru->id_jabatan = null;
        $guru->save();
        return redirect()->back()->with('success', 'data berhasil dihapus');
    }
}
