<?php

use Illuminate\Support\Facades\Route;

//user
Route::get('/', function () {
    return view('pages.user.home.index');
});
Route::get('/sambutan-kepala-sekolah', function () {
    return view('pages.user.tentang kami.sambutan');
});
Route::get('/visi-misi', function () {
    return view('pages.user.tentang kami.visiMisi');
});
Route::get('/struktur-organisasi', function () {
    return view('pages.user.tentang kami.strukturOrganisasi');
});
Route::get('/pendidik', function () {
    return view('pages.user.akademik.pendidik');
});
Route::get('/jadwal', function () {
    return view('pages.user.akademik.jadwal');
});
Route::get('/prestasi', function () {
    return view('pages.user.akademik.prestasi');
});
Route::get('/akuntansi-keuangan-lembaga', function () {
    return view('pages.user.program keahlian.akuntansi');
});
Route::get('/menajemen-perkantoran', function () {
    return view('pages.user.program keahlian.menajemenPerkantoran');
});
Route::get('/pemasaran', function () {
    return view('pages.user.program keahlian.pemasaran');
});
Route::get('/pengembangan-perangkat-lunak', function () {
    return view('pages.user.program keahlian.perangkatLunak');
});
Route::get('/teknik-komputer-jaringan', function () {
    return view('pages.user.program keahlian.teknikKomputer');
});
Route::get('/broadcasting', function () {
    return view('pages.user.program keahlian.broadcasting');
});

//admin
Route::get('/admin', function () {
    return view('pages.admin.dashboard');
})->name('admin');
