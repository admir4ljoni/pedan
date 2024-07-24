<?php

namespace App\Http\Controllers;

use App\Models\JurusanImage;
use App\Models\MateriJurusan;
use App\Models\ProfilJurusan;
use App\Models\ProspekJurusan;
use App\Models\VisiMisiJurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JurusanController extends Controller
{
    public function index(Request $request)
    {
        $segment = $request->segment(3);
        $route = [
            'akutansi' => 'akuntansi',
            'perkantoran' => 'menajemenPerkantoran',
            'pemasaran' => 'pemasaran',
            'pplg' => 'perangkatLunak',
            'tkj' => 'teknikKomputer',
            'broadcasting' => 'broadcasting',
        ];

        if (array_key_exists($segment, $route)) {
            $view = 'pages.admin.program keahlian.' . $route[$segment];
        } else {
            return response()->json('error', 'error');
        }
        $jurusan = [
            'akutansi' => 1,
            'perkantoran' => 2,
            'pplg' => 3,
            'tkj' => 4,
            'broadcasting' => 5,
            'pemasaran' => 6,
        ];

        $jurusanId = $jurusan[$segment];

        $visiMisi = VisiMisiJurusan::where('jurusan_id', $jurusanId)->first();
        $materi = MateriJurusan::where('jurusan_id', $jurusanId)->first();
        $prospek = ProspekJurusan::where('jurusan_id', $jurusanId)->first();
        $visiMisiList = $visiMisi ? explode("\n", $visiMisi->isi) : [];
        $materiList = $materi ? explode("\n", $materi->isi) : [];
        $prospekList = $prospek ? explode("\n", $prospek->isi) : [];

        $items = [
            'profil' => ProfilJurusan::where('jurusan_id', $jurusanId)->first(),
            'visiMisi' => $visiMisiList,
            'materi' => $materiList,
            'prospek' => $prospekList,
            'data' => JurusanImage::where('jurusan_id', $jurusanId)->get()
        ];
        return view($view, $items);
    }

    public function update(Request $request, $jurusan)
    {
        $route = [
            1 => 'admin-jurusan-akutansi',
            2 => 'admin-jurusan-menajemen-perkantoran',
            3 => 'admin-jurusan-perangkat-lunak',
            4 => 'admin-jurusan-teknik-komputer-jaringan',
            5 => 'admin-jurusan-broadcasting',
            6 => 'admin-jurusan-pemasaran'
        ];

        $request->validate([
            'profil' => 'string',
            'visiMisi' => 'string',
            'materi' => 'string',
            'prospek' => 'string',
            'foto' => 'image|mimes:jpeg,jpg,png,svg|max:2048'
        ]);

        if ($request->has('profil')) {
            $data = ProfilJurusan::where('jurusan_id', $jurusan)->first();
            if ($data) {
                $data->update([
                    'isi' => $request->profil
                ]);
            } else {
                ProfilJurusan::create([
                    'isi' => $request->profil,
                    'jurusan_id' => $jurusan
                ]);
            }
        }

        if ($request->has('visiMisi')) {
            $data = VisiMisiJurusan::where('jurusan_id', $jurusan)->first();
            if ($data) {
                $data->update([
                    'isi' => $request->visiMisi
                ]);
            } else {
                VisiMisiJurusan::create([
                    'isi' => $request->visiMisi,
                    'jurusan_id' => $jurusan
                ]);
            }
        }

        if ($request->has('materi')) {
            $data = MateriJurusan::where('jurusan_id', $jurusan)->first();
            if ($data) {
                $data->update([
                    'isi' => $request->materi
                ]);
            } else {
                MateriJurusan::create([
                    'isi' => $request->materi,
                    'jurusan_id' => $jurusan
                ]);
            }
        }

        if ($request->has('prospek')) {
            $data = ProspekJurusan::where('jurusan_id', $jurusan)->first();
            if ($data) {
                $data->update([
                    'isi' => $request->prospek
                ]);
            } else {
                ProspekJurusan::create([
                    'isi' => $request->prospek,
                    'jurusan_id' => $jurusan
                ]);
            }
        }

        if ($request->hasFile('foto')) {
            $data = JurusanImage::where('jurusan_id', $jurusan)->count();
            if ($data < 5) {
                $file = $request->file('foto');
                $hashedImage = $file->hashName();
                $file->storeAs('public/storages/jurusan/', $hashedImage);

                JurusanImage::create([
                    'isi' => $hashedImage,
                    'jurusan_id' => $jurusan
                ]);
            } else {
                return redirect()->route($route[$jurusan])->withErrors(['error', 'foto hanya boleh 5']);
            }
        }

        return redirect()->route($route[$jurusan])->with('success', 'success');
    }

    public function delete(Request $request, $jurusan)
    {
        $route = [
            1 => 'admin-jurusan-akutansi',
            2 => 'admin-jurusan-menajemen-perkantoran',
            3 => 'admin-jurusan-perangkat-lunak',
            4 => 'admin-jurusan-teknik-komputer-jaringan',
            5 => 'admin-jurusan-broadcasting',
            6 => 'admin-jurusan-pemasaran'
        ];

        $data = JurusanImage::findOrFail($request->guru_id);
        Storage::delete('public/storages/jurusan/' . $data->isi);
        $data->delete();

        return redirect()->route($route[$jurusan])->with('success', 'success');
    }
}
