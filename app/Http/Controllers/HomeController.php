<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutImage;
use App\Models\Berita;
use App\Models\Guru;
use App\Models\KesiswaanImage;
use App\Models\Pivot_Guru_Mapel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Berita::all();
        return view('pages.user.home.index', ['data' => $data]);
    }

    public function sambutan()
    {
        $data = About::where('jenis', 1)->get();
        $data2 = Guru::where('id_jabatan', 1)->get();
        return view('pages.user.tentang kami.sambutan', ['data' => $data, 'data2' => $data2]);
    }

    public function visiMisi()
    {
        $data = About::where('jenis', 2)->get();
        $data2 = About::where('jenis', 3)->get();
        $data3 = AboutImage::where('about_id', 2)->first();
        $data4 = AboutImage::where('about_id', 3)->first();

        return view('pages.user.tentang kami.visiMisi', ['data' => $data, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4]);
    }

    public function strukturOrganisasi()
    {
        $data = [
            'kepsek' => Guru::where('id_jabatan', 1)->first(),
            'kasubag' => Guru::where('id_jabatan', 2)->first(),
            'wksKurikulum' => Guru::where('id_jabatan', 3)->first(),
            'wksKesiswaan' => Guru::where('id_jabatan', 4)->first(),
            'wksSarpas' => Guru::where('id_jabatan', 5)->first(),
            'humas' => Guru::where('id_jabatan', 6)->first(),
            'kaprogAkutansi' => Guru::where('id_jabatan', 7)->first(),
            'kaprogBisnis' => Guru::where('id_jabatan', 8)->first(),
            'kaprogPemasaran' => Guru::where('id_jabatan', 9)->first(),
            'kaprogPplg' => Guru::where('id_jabatan', 10)->first(),
            'kaprogTkj' => Guru::where('id_jabatan', 11)->first(),
            'kaprogBroadcasting' => Guru::where('id_jabatan', 12)->first()
        ];

        return view('pages.user.tentang kami.strukturOrganisasi', $data);
    }

    public function kesiswaan()
    {
        $data = [
            'kebersihan' => KesiswaanImage::where('kesiswaan_id', 1)->get(),
            'lomba' => KesiswaanImage::where('kesiswaan_id', 2)->get(),
            'minatBakat' => KesiswaanImage::where('kesiswaan_id', 3)->get(),
            'nilaiKarakter' => KesiswaanImage::where('kesiswaan_id', 4)->get(),
            'ppdb' => KesiswaanImage::where('kesiswaan_id', 5)->get()
        ];

        return view('pages.user.kesiswaan.kesiswaan', $data);
    }

    public function pendidik()
    {
        $data = [
            'pai' => Pivot_Guru_Mapel::where('id_mapel', 2)->get(),
            'pak' => Pivot_Guru_Mapel::where('id_mapel', 3)->get(),
            'pp' => Pivot_Guru_Mapel::where('id_mapel', 4)->get(),
            'bindo' => Pivot_Guru_Mapel::where('id_mapel', 5)->get(),
            'mat' => Pivot_Guru_Mapel::where('id_mapel', 6)->get(),
            'sej' => Pivot_Guru_Mapel::where('id_mapel', 7)->get(),
            'binggris' => Pivot_Guru_Mapel::where('id_mapel', 8)->get(),
            'sb' => Pivot_Guru_Mapel::where('id_mapel', 9)->get(),
            'or' => Pivot_Guru_Mapel::where('id_mapel', 10)->get(),
            'ipas' => Pivot_Guru_Mapel::where('id_mapel', 11)->get(),
            'rpl' => Pivot_Guru_Mapel::where('id_mapel', 12)->get(),
            'tkj' => Pivot_Guru_Mapel::where('id_mapel', 13)->get(),
            'akutansi' => Pivot_Guru_Mapel::where('id_mapel', 14)->get(),
            'mplb' => Pivot_Guru_Mapel::where('id_mapel', 15)->get(),
            'pemasaran' => Pivot_Guru_Mapel::where('id_mapel', 16)->get(),
            'bjawa' => Pivot_Guru_Mapel::where('id_mapel', 17)->get(),
            'bk' => Pivot_Guru_Mapel::where('id_mapel', 18)->get(),
        ];

        return view('pages.user.akademik.pendidik', $data);
    }
}
