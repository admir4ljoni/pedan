<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\AboutImage;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\Drivers\Gd\Driver;




class AboutUsController extends Controller
{
    public function index()
    {
        return view('pages.admin.tentangKami');
    }

    public function update(Request $request)
    {
        $manager = new ImageManager(Driver::class);
        try {
            $request->validate([
                'jenis' => 'required|in:1,2,3',
                'isi' => 'nullable|string',
                'foto1' => 'image|mimes:jpeg,jpg,png,svg|max:2048',
                'foto2' => 'image|mimes:jpeg,jpg,png,svg|max:2048',
            ]);

            $jenis = $request->jenis;
            $types = [
                1 => 'Sambutan',
                2 => 'Visi',
                3 => 'Misi'
            ];

            if (!array_key_exists($jenis, $types)) {
                throw new \Exception('Invalid jenis value');
            }

            $type = $types[$jenis];
            if ($request->isi) {
                About::updateOrCreate(
                    ['jenis' => $jenis],
                    ['isi' => $request->isi]
                );
            }

            if ($jenis != 1) {
                for ($i = 1; $i <= 2; $i++) {
                    $fileInput = 'foto' . $i;

                    if ($request->hasFile($fileInput)) {
                        $file = $request->file($fileInput);

                        $oldImage = $manager->read($file);
                        $image = $oldImage->toJpeg(90);
                        $fileName = 'foto' . $type . $i . '.' . 'jpg';

                        $existingImage = AboutImage::where('gambar', $fileName)->first();
                        if ($existingImage) {
                            Storage::delete('public/storages/about/' . $existingImage->gambar);

                            $existingImage->update([
                                'gambar' => $fileName
                            ]);
                        } else {
                            AboutImage::create([
                                'gambar' => $fileName,
                                'about_id' => $jenis
                            ]);
                        }
                        Storage::put('public/storages/about/' . $fileName, $image);
                    }
                }
            }

            return response()->json(['success' => 'Data updated successfully'], 200);

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'An error occurred while updating the data.',
                'message' => $e->getMessage()
            ], 500);
        }
    }

}
