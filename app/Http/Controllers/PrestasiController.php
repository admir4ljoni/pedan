<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    public function index()
    {
        $data = Prestasi::all();
        return view('pages.admin.prestasi', ['data' => $data]);
    }

    public function create(Request $request)
    {
        try {
            $request->validate([
                'foto' => 'required|image|mimes:jpeg,jpg,png,svg|max:2048',
                'nama' => 'required|string',
                'tanggal' => 'required'
            ]);

            $image = $request->file('foto');
            $hashedName = $image->hashName();
            $image->storeAs('public/storages/prestasi/', $hashedName);

            Prestasi::create([
                'nama' => $request->nama,
                'gambar' => $hashedName,
                'tanggal_pelaksanaan' => $request->tanggal
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'An error occurred while updating the data.',
                'message' => $e->getMessage()
            ], 500);
        }
        return redirect()->route('admin-prestasi')->with('success', 'success');
    }

    public function show(string $id)
    {
        $data = Prestasi::find($id);
        return response()->json($data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'foto' => 'image|mimes:jpeg,jpg,png,svg|max:2048',
            'nama' => 'string'
        ]);

        $id = $request->idEdit;
        $data = Prestasi::find($id);
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');

            Storage::delete('public/storages/prestasi/' . $data->gambar);

            $hashedImage = $file->hashName();
            $data->gambar = $hashedImage;
            $file->storeAs('public/storages/prestasi/', $hashedImage);
        }
        $data->nama = $request->nama;
        $data->tanggal_pelaksanaan = $request->tanggal;
        $data->save();

        return redirect()->route('admin-prestasi')->with('success', 'success');
    }

    public function delete(Request $request)
    {
        $data = Prestasi::findOrFail($request->guru_id);
        $data->delete();
        return redirect()->route('admin-prestasi')->with('success', 'success');
    }
}
