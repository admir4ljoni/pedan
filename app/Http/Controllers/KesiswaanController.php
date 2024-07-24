<?php

namespace App\Http\Controllers;

use App\Models\KesiswaanImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KesiswaanController extends Controller
{
    public function index()
    {
        return view('pages.admin.kesiswaan');
    }

    public function update(Request $request)
    {
        $request->validate([
            'wks_id' => 'exists:kesiswaans,id',
            'foto1' => 'image|mimes:jpeg,jpg,png,svg|max:2048',
            'foto2' => 'image|mimes:jpeg,jpg,png,svg|max:2048',
            'foto3' => 'image|mimes:jpeg,jpg,png,svg|max:2048',
            'foto4' => 'image|mimes:jpeg,jpg,png,svg|max:2048',
            'foto5' => 'image|mimes:jpeg,jpg,png,svg|max:2048',
        ]);

        $wks_id = $request->wks_id;
        $ranges = [
            1 => [1, 5],
            2 => [6, 10],
            3 => [11, 15],
            4 => [16, 20],
            5 => [21, 25],
        ];

        [$start, $end] = $ranges[$wks_id];

        for ($i = 1; $i <= 5; $i++) {
            $fileInput = 'foto' . $i;
            $wksId_index = $start + $i - 1;

            if ($request->hasFile($fileInput)) {
                $file = $request->$fileInput;
                $hashedImage = $file->hashname();
                $pathImage = $file->storeAs('public/storages/wks', $hashedImage);

                $wksImage = KesiswaanImage::where('id', $wksId_index)->where('kesiswaan_id', $wks_id)->first();

                if ($wksImage) {
                    Storage::delete('public/storages/wks/' . $wksImage->gambar);

                    $wksImage->update(['gambar' => $hashedImage]);
                } else {
                    KesiswaanImage::create([
                        'gambar' => $hashedImage,
                        'kesiswaan_id' => $wks_id
                    ]);
                }
            }
        }

        return redirect()->route('admin-kesiswaan')->with('success', 'data berhasil ditambahkan');
    }
}
