<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KesiswaanController;
use App\Http\Controllers\StrukturOrganisasi;
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


// Admin login
Route::get('/admin', function () {
    return view('pages.admin.login');
});

// Admin register
Route::get('/admin/register', function () {
    return view('pages.admin.register');
});

// Admin main dashboard
Route::get('/admin/program-keahlian', function () {
    return view('pages.admin.program keahlian.index');
});

// Admin akutansi
Route::get('/admin/program-keahlian/akuntansi', function () {
    return view('pages.admin.program keahlian.akuntansi');
});

// Admin perkantoran
Route::get('/admin/program-keahlian/menajemen-perkantoran', function () {
    return view('pages.admin.program keahlian.menajemenPerkantoran');
});

// Admin perangkat lunak
Route::get('/admin/program-keahlian/perangkat-lunak', function () {
    return view('pages.admin.program keahlian.perangkatLunak');
});

// Admin komputer jaringan
Route::get('/admin/program-keahlian/teknik-komputer-jaringan', function () {
    return view('pages.admin.program keahlian.teknikKomputer');
});

// Admin broadcasting 
Route::get('/admin/program-keahlian/broadcasting', function () {
    return view('pages.admin.program keahlian.broadcasting');
});

// Admin pemasaran
Route::get('/admin/program-keahlian/pemasaran', function () {
    return view('pages.admin.program keahlian.pemasaran');
});

// Admin jadwal
Route::get('/admin/jadwal', function () {
    return view('pages.admin.jadwal');
});

// Admin berita
Route::get('/admin/berita', function () {
    return view('pages.admin.berita');
});

// Admin prestasi
Route::get('/admin/prestasi', function () {
    return view('pages.admin.prestasi');
});

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
