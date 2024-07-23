<?php

namespace App\Http\Controllers;

use App\Models\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JadwalController extends Controller
{
    public function index()
    {
        $data = Pdf::all();
        return view('pages.admin.jadwal', ['data' => $data]);
    }

    public function create(Request $request)
    {
        $data = Pdf::first();

        if (!$data) {
            $request->validate([
                'jadwal' => 'required|mimes:pdf',
                'nama' => 'required|string|max:255'
            ]);

            $file = $request->file('jadwal');
            $path = $file->store('public/pdfs');

            Pdf::create([
                'title' => $request->nama,
                'file_path' => $path,
            ]);


        } else {
            $request->validate([
                'jadwal' => 'nullable|mimes:pdf',
                'nama' => 'string|max:255'
            ]);

            $data->title = $request->nama;

            if ($request->hasFile('jadwal')) {
                Storage::delete($data->file_path);

                $file = $request->file('jadwal');
                $path = $file->store('public/pdfs');
                $data->file_path = $path;
            }
            $data->save();
        }
        return redirect()->route('admin-jadwal')->with('success', 'PDF created successfully.');
    }

    public function download()
    {
        $data = Pdf::first();

        return Storage::download($data->file_path, $data->title . '.pdf');
    }

    public function delete()
    {
        $data = Pdf::first();

        if (!$data) {
            return redirect()->route('admin-jadwal')->with('error', 'data not found.');
        }

        if (Storage::exists($data->file_path)) {
            Storage::delete($data->file_path);
        }

        $data->delete();

        return redirect()->route('admin-jadwal')->with('success', 'PDF deleted successfully.');
    }

}
