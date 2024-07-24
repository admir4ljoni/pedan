@extends('template.jurusanDetail')

@section('namaJurusan', 'Teknik Komputer Jaringan Dan Telekomunikasi')

@section('deskripsiJurusan')
@if($profil)
    {{$profil->isi }}
@else
    'Lorem ipsum dolor sit amet'
@endif
@endsection

@section('visiJurusan')
@if($visiMisi)
    <x-check title="{{$visiMisi->isi}}" />
@else
    <x-check title="lorem ipsum dolor sit amet" />
@endif
@endsection

@section('materiJurusan')
@if($materi)
    <x-check title="{{$materi->isi}}" />
@else
    <x-check title="lorem ipsum dolor sit amet" />
@endif
@endsection

@section('prospekKerjaJurusan')
@if($prospek)
    <li>{{$prospek->isi}}</li>
@else
    <li>Lorem ipsum dolor sit amet</li>
    <li>Consectetur adipiscing elit</li>
    <li>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
    <li>Ut enim ad minim veniam</li>
@endif
@endsection

@php
    $gambarJurusan = $foto->map(fn($item) => [
        'image' => Storage::url('public/storages/jurusan/' . $item->isi ?? '/assets/batikk.jpg')
    ])->toArray();
@endphp
@section('gambarJurusan')
<img src="{{$gambarJurusan[0]['image'] ?? '/assets/batikk.jpg'}}" alt="foto jurusan"
    class="w-56 h-64 md:h-96 md:w-80 object-cover absolute top-0 left-0 rounded-lg" />
@endsection


@section('galeriFotoJurusan')
<x-galeriFoto :image1="$gambarJurusan[0]['image'] ?? 'assets/lks.jpg'"
    :image2="$gambarJurusan[1]['image'] ?? 'assets/lks.jpg'" :image3="$gambarJurusan[2]['image'] ?? 'assets/lks.jpg'"
    :image4="$gambarJurusan[3]['image'] ?? 'assets/lks.jpg'" :image5="$gambarJurusan[4]['image'] ?? 'assets/lks.jpg'" />
@endsection