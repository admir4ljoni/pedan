@extends('template.jurusanDetail')

@section('namaJurusan', 'Akuntansi & Keuangan Lembaga')

@section('deskripsiJurusan', 'Lorem ipsum dolor sit amet')

@section('visiJurusan')
    <x-check title="lorem ipsum dolor sit amet" />
@endsection

@section('materiJurusan')
    <x-check title="lorem ipsum dolor sit amet" />
@endsection

@section('prospekKerjaJurusan')
    <li>Lorem ipsum dolor sit amet</li>
    <li>Consectetur adipiscing elit</li>
    <li>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
    <li>Ut enim ad minim veniam</li>
@endsection

@section('gambarJurusan',
    'https://png.pngtree.com/thumb_back/fh260/background/20230702/pngtree-d-render-illustrating-concepts-of-accounting-and-financial-management-in-business-image_3737899.jpg')


@section('galeriFotoJurusan')
    <x-galeriFoto
        image1="https://png.pngtree.com/thumb_back/fh260/background/20230702/pngtree-d-render-illustrating-concepts-of-accounting-and-financial-management-in-business-image_3737899.jpg"
        title1="Judul Foto 1"
        image2="https://png.pngtree.com/thumb_back/fh260/background/20230702/pngtree-d-render-illustrating-concepts-of-accounting-and-financial-management-in-business-image_3737899.jpg"
        title2="Judul Foto 2" />
@endsection
