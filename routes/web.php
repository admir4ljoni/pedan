<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KesiswaanController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\StrukturOrganisasi;
use App\Models\Jurusan;
use Illuminate\Support\Facades\Route;

//User

// Home
Route::get('/', function () {
    return view('pages.user.home.index');
});
// Sambutan
Route::get('/sambutan-kepala-sekolah', function () {
    return view('pages.user.tentang kami.sambutan');
});

// Visi misi
Route::get('/visi-misi', function () {
    return view('pages.user.tentang kami.visiMisi');
});

// Kesiswaan
Route::get('/kesiswaan', function () {
    return view('pages.user.kesiswaan.kesiswaan');
});

// Struktur organisasi
Route::get('/struktur-organisasi', function () {
    return view('pages.user.tentang kami.strukturOrganisasi');
});

// Pendidik
Route::get('/pendidik', function () {
    return view('pages.user.akademik.pendidik');
});

// Jadwal
Route::get('/jadwal', function () {
    return view('pages.user.akademik.jadwal');
});

// Prestasi
Route::get('/prestasi', function () {
    return view('pages.user.akademik.prestasi');
});

// Jurusan akutansi
Route::get('/akuntansi-keuangan-lembaga', function () {
    return view('pages.user.program keahlian.akuntansi');
});

// Jurusan manajemen perkantoran
Route::get('/menajemen-perkantoran', function () {
    return view('pages.user.program keahlian.menajemenPerkantoran');
});

// Jurusan pemasaran
Route::get('/pemasaran', function () {
    return view('pages.user.program keahlian.pemasaran');
});

// Jurusn perangkat lunak
Route::get('/pengembangan-perangkat-lunak', function () {
    return view('pages.user.program keahlian.perangkatLunak');
});

// Jurusan komputer jaringan
Route::get('/teknik-komputer-jaringan', function () {
    return view('pages.user.program keahlian.teknikKomputer');
});

// Jurusan broadcasting
Route::get('/broadcasting', function () {
    return view('pages.user.program keahlian.broadcasting');
});

// Berita
Route::get('/detail-berita', function () {
    return view('pages.user.berita.detailBerita');
});


// Login
Route::get('/admin', [AdminController::class, 'indexLogin'])->name('login');
Route::post('/login', [AdminController::class, 'login'])->name('loginActual');

Route::middleware('auth')->group(function () {
    // Admin register
    Route::get('/admin/register', [AdminController::class, 'indexRegister'])->name('indexRegister');
    Route::post('/register', [AdminController::class, 'register'])->name('register');

    // Admin main dashboard
    Route::get('/admin/program-keahlian', function () {
        return view('pages.admin.program keahlian.index');
    });

    // Admin jurusan
    Route::get('/admin/program-keahlian/akuntansi', [JurusanController::class, 'index'])->name('admin-jurusan-akutansi');
    Route::get('/admin/program-keahlian/menajemen-perkantoran', [JurusanController::class, 'indexMenajemenPerkantoran'])->name('admin-jurusan-menajemen-perkantoran');
    Route::get('/admin/program-keahlian/perangkat-lunak', [JurusanController::class, 'indexPerangkatLunak'])->name('admin-jurusan-perangkat-lunak');
    Route::get('/admin/program-keahlian/teknik-komputer-jaringan', [JurusanController::class, 'indexTeknikKomputerJaringan'])->name('admin-jurusan-teknik-komputer-jaringan');
    Route::get('/admin/program-keahlian/broadcasting', [JurusanController::class, 'indexBroadcasting'])->name('admin-jurusan-broadcasting');
    Route::get('/admin/program-keahlian/pemasaran', [JurusanController::class, 'indexPemasaran'])->name('admin-jurusan-pemasaran');

    Route::put('/admin/jurusan/update/{jurusan}', [JurusanController::class, 'update'])->name('admin-jurusan-update');
    Route::delete('/admin/jurusan/update/{jurusan}', [JurusanController::class, 'delete'])->name('admin-jurusan-delete');

    // Admin jadwal
    Route::get('/admin/jadwal', [JadwalController::class, 'index'])->name('admin-jadwal');
    Route::put('/admin/jadwal/create', [JadwalController::class, 'create'])->name('admin-jadwal-create');
    Route::get('/admin/jadwal/download', [JadwalController::class, 'download'])->name('admin-jadwal-download');
    Route::delete('/admin/jadwal/delete', [JadwalController::class, 'delete'])->name('admin-jadwal-delete');

    // Admin berita
    Route::get('/admin/berita', [BeritaController::class, 'index'])->name('admin-berita');
    Route::post('/admin/berita/create', [BeritaController::class, 'create'])->name('admin-berita-create');
    Route::get('/admin/berita/{id}', [BeritaController::class, 'show'])->name('admin-berita-show');
    Route::put('/admin/berita/update', [BeritaController::class, 'update'])->name('admin-berita-update');
    Route::delete('/admin/berita/delete', [BeritaController::class, 'delete'])->name('admin-berita-delete');

    // Admin prestasi
    Route::get('/admin/prestasi', [PrestasiController::class, 'index'])->name('admin-prestasi');
    Route::post('/admin/prestasi/create', [PrestasiController::class, 'create'])->name('admin-prestasi-create');
    Route::get('/admin/prestasi/{id}', [PrestasiController::class, 'show'])->name('admin-prestasi-show');
    Route::put('/admin/prestasi/update', [PrestasiController::class, 'update'])->name('admin-prestasi-update');
    Route::delete('/admin/prestasi/delete', [PrestasiController::class, 'delete'])->name('admin-prestasi-delete');

    // Admin tentang kami (sambutan, visi misi, dll)
    Route::get('/admin/tentang-kami', [AboutUsController::class, 'index'])->name('admin-about-us');
    Route::put('/admin/tentang-kami/update', [AboutUsController::class, 'update'])->name('admin-about-us-update');

    // Admin kesiswaan
    Route::get('/admin/kesiswaan', [KesiswaanController::class, 'index'])->name('admin-kesiswaan');
    Route::put('/admin/kesiswaan/update', [KesiswaanController::class, 'update'])->name('admin-kesiswaan-update');


    // Admin struktur organisasi
    Route::get('/admin/struktur-organisasi', [StrukturOrganisasi::class, 'index'])->name('admin-struktur-organisasi');
    Route::put('/admin/struktur-organisasi/create', [StrukturOrganisasi::class, 'create'])->name('admin-struktur-organisasi-create');
    Route::get('/admin/struktur-organisasi/{id}', [StrukturOrganisasi::class, 'show'])->name('admin-struktur-organisasi-show');
    Route::put('/admin/stuktur-organisasi/update', [StrukturOrganisasi::class, 'update'])->name('admin-struktur-organisasi-update');
    Route::delete('/admin/struktur-organisasi/delete', [StrukturOrganisasi::class, 'delete'])->name('admin-struktur-organisasi-delete');

    // Admin daftar guru
    Route::get('/admin/daftar-guru', [GuruController::class, 'index'])->name('admin-daftar-guru');
    Route::post('/admin/daftar-guru/create', [GuruController::class, 'create'])->name('admin-daftar-guru-create');
    Route::get('/admin/daftar-guru/{id}', [GuruController::class, 'show'])->name('admin-daftar-guru-show');
    Route::put('/admin/daftar-guru/update', [GuruController::class, 'update'])->name('admin-daftar-guru-update');
    Route::delete('/admin/daftar-guru/delete', [GuruController::class, 'delete'])->name('admin-daftar-guru-delete');
});


