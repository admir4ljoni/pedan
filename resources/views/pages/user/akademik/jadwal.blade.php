@extends('template.user')
@section('title', 'Kalender Akademik')

@section('content')

    <div class="mx-12 md:mx-16 mt-12 md:mt-20 ">
        <h1 class="uppercase font-black text-2xl md:text-3xl text-center mb-14 text-primaryColor">kalender akademik</h1>
        <div class="flex justify-center">
            <iframe src="/assets/jadwal kbm.pdf" width="1000" height="600" frameborder="0" ></iframe>
        </div>
    </div>
    
@endsection
