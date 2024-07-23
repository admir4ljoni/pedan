<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $data = Berita::all();
        return view('pages.admin.berita', ['data' => $data]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,jpg,png,svg|max:2048',
            'judul' => 'required|string',
            'isi' => 'required|string',
            'tanggal' => 'required'
        ]);

        $image = $request->file('foto');
        $hashedImage = $image->hashName();
        $image->storeAs('public/storages/berita/', $hashedImage);

        Berita::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $hashedImage,
            'tanggal_pembuatan' => $request->tanggal
        ]);

        return redirect()->route('admin-berita')->with('success', 'success');
    }

    public function show(string $id)
    {
        $data = Berita::find($id);
        return response()->json($data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'foto' => 'image|mimes:jpeg,jpg,png,svg|max:2048',
            'judul' => 'string',
            'isi' => 'string',
        ]);
        $id = $request->beritaId;
        $data = Berita::find($id);
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');

            Storage::delete('public/storages/berita/' . $data->gambar);
            $hashedImage = $file->hashName();
            $data->gambar = $hashedImage;
            $file->storeAs('public/storages/berita/', $hashedImage);
        }
        $data->judul = $request->judul;
        $data->tanggal_pembuatan = $request->tanggal;
        $data->isi = $request->isi;
        $data->save();

        return redirect()->route('admin-berita')->with('success', 'success');

    }

    public function delete(Request $request)
    {
        $data = Berita::findOrFail($request->guru_id);
        Storage::delete('public/storages/berita/' . $data->gambar);
        $data->delete();
        return redirect()->route('admin-berita')->with('success', 'success');
    }

}
