<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KesiswaanController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\StrukturOrganisasi;
use App\Models\Jurusan;
use Illuminate\Support\Facades\Route;

//User

// Home
Route::get('/', [HomeController::class, 'index'])->name('user-index');
// Sambutan
Route::get('/sambutan-kepala-sekolah', [HomeController::class, 'sambutan'])->name('user-sambutan');
// Visi misi
Route::get('/visi-misi', [HomeController::class, 'visiMisi'])->name('user-visi-misi');
// Struktur organisasi
Route::get('/struktur-organisasi', [HomeController::class, 'strukturOrganisasi'])->name('user-struktur-organisasi');
// Kesiswaan
Route::get('/kesiswaan', [HomeController::class, 'kesiswaan'])->name('user-kesiswaan');
// Pendidik
Route::get('/pendidik', [HomeController::class, 'pendidik'])->name('user-pendidik');
// Jadwal
Route::get('/jadwal', [HomeController::class, 'jadwal'])->name('user-jadwal');

// Prestasi
Route::get('/prestasi', [HomeController::class, 'prestasi'])->name('user-prestasi');

// Jurusan
Route::get('/akutansi', [HomeController::class, 'jurusan'])->name('akutansi');
Route::get('/perkantoran', [HomeController::class, 'jurusan'])->name('perkantoran');
Route::get('/pemasaran', [HomeController::class, 'jurusan'])->name('pemasaran');
Route::get('/pplg', [HomeController::class, 'jurusan'])->name('pplg');
Route::get('/tkj', [HomeController::class, 'jurusan'])->name('tkj');
Route::get('/broadcasting', [HomeController::class, 'jurusan'])->name('broadcasting');

// Berita
Route::get('/detail-berita/{id}', [HomeController::class, 'berita'])->name('berita');

// Login
Route::get('/admin', [AdminController::class, 'indexLogin'])->name('login');
Route::post('/login', [AdminController::class, 'login'])->name('loginActual');

Route::get('/admin/register', [AdminController::class, 'indexRegister'])->name('indexRegister');
Route::post('/register', [AdminController::class, 'register'])->name('register');

Route::middleware('auth')->group(function () {
    // Admin register

    // Admin main dashboard
    Route::get('/admin/program-keahlian', function () {
        return view('pages.admin.program keahlian.index');
    });

    // Admin jurusan
    Route::get('/admin/program-keahlian/akutansi', [JurusanController::class, 'index'])->name('admin-jurusan-akutansi');
    Route::get('/admin/program-keahlian/perkantoran', [JurusanController::class, 'index'])->name('admin-jurusan-menajemen-perkantoran');
    Route::get('/admin/program-keahlian/pplg', [JurusanController::class, 'index'])->name('admin-jurusan-perangkat-lunak');
    Route::get('/admin/program-keahlian/tkj', [JurusanController::class, 'index'])->name('admin-jurusan-teknik-komputer-jaringan');
    Route::get('/admin/program-keahlian/broadcasting', [JurusanController::class, 'index'])->name('admin-jurusan-broadcasting');
    Route::get('/admin/program-keahlian/pemasaran', [JurusanController::class, 'index'])->name('admin-jurusan-pemasaran');

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


