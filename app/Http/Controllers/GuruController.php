<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Mapel;
use App\Models\Pivot_Guru_Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::with('mapel')->get();
        $mapel = Mapel::all();
        return view('pages.admin.daftarGuru', ['guru' => $guru, 'mapel' => $mapel]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,jpg,png,svg|max:2048',
            'nomor' => 'required|string',
            'mapel_id' => 'required|exists:mapels,id'
        ]);

        $hashFoto = $request->file('foto')->hashName();
        $pathFoto = $request->file('foto')->storeAs('public/images', $hashFoto);

        $guru = Guru::create([
            'nama' => $request->nama,
            'gambar' => $hashFoto,
            'nomor_hp' => $request->nomor,
            'id_jabatan' => null
        ]);

        $guru->mapel()->attach($request->mapel_id);

        return redirect()->route('admin-daftar-guru')->with('success', 'data berhasil ditambah');
    }

    public function show(string $id)
    {
        $guru = Guru::with('mapel')->findOrFail($id);

        return response()->json($guru);
    }

    public function update(Request $request)
    {
        $guru = Guru::findOrFail($request->guru_id);

        $guru->nama = $request->editNama;
        $guru->nomor_hp = $request->editNomor;

        if ($request->hasFile('editFoto')) {
            Storage::delete($guru->gambar);

            $hashFoto = $request->file('editFoto')->hashName();
            $pathFoto = $request->file('editFoto')->storeAs('public/images', $hashFoto);

            $guru->gambar = $hashFoto;
        }

        $guru->save();

        $guru->mapel()->sync($request->editMapel_id);

        return redirect()->back()->with('Success', 'data berhasil diubah');
    }

    public function delete(Request $request)
    {
        $guru = Guru::findOrFail($request->guru_id);

        $guru->delete();

        return redirect()->back()->with('success', 'data berhasil dihapus');
    }
}
