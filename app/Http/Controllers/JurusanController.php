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
    public function index()
    {
        $data = JurusanImage::get();
        return view('pages.admin.program keahlian.akuntansi', ['data' => $data]);
    }

    public function indexMenajemenPerkantoran()
    {
        $data = JurusanImage::get();
        return view('pages.admin.program keahlian.menajemenPerkantoran', ['data' => $data]);
    }
    public function indexPerangkatLunak()
    {
        $data = JurusanImage::get();
        return view('pages.admin.program keahlian.perangkatLunak', ['data' => $data]);
    }

    public function indexTeknikKomputerJaringan()
    {
        $data = JurusanImage::get();
        return view('pages.admin.program keahlian.teknikKomputer', ['data' => $data]);
    }

    public function indexBroadcasting()
    {
        $data = JurusanImage::get();
        return view('pages.admin.program keahlian.broadcasting', ['data' => $data]);
    }

    public function indexPemasaran()
    {
        $data = JurusanImage::get();
        return view('pages.admin.program keahlian.pemasaran', ['data' => $data]);
    }



    public function update(Request $request, $jurusan)
    {
        $route = [
            1 => '/admin/program-keahlian/akuntansi',
            2 => '/admin/program-keahlian/menajemen-perkantoran',
            3 => '/admin/program-keahlian/perangkat-lunak',
            4 => '/admin/program-keahlian/teknik-komputer-jaringan',
            5 => '/admin/program-keahlian/broadcasting',
            6 => '/admin/program-keahlian/pemasaran'
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
                return redirect($route[$jurusan])->withErrors(['error', 'foto hanya boleh 5']);
            }
        }

        return redirect($route[$jurusan])->with('success', 'success');
    }

    public function delete(Request $request, $jurusan)
    {
        $route = [
            1 => '/admin/program-keahlian/akuntansi',
            2 => '/admin/program-keahlian/menajemen-perkantoran',
            3 => '/admin/program-keahlian/perangkat-lunak',
            4 => '/admin/program-keahlian/teknik-komputer-jaringan',
            5 => '/admin/program-keahlian/broadcasting',
            6 => '/admin/program-keahlian/pemasaran'
        ];

        $data = JurusanImage::findOrFail($request->guru_id);
        Storage::delete('public/storages/jurusan/' . $data->isi);
        $data->delete();

        return redirect($route[$jurusan])->with('success', 'success');
    }
}
