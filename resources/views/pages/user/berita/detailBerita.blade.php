@extends('template.user')
@section('title', 'Detail Berita')

@section('content')
<div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-12 md:mx-16 mt-10">
    <div class="grid lg:grid-cols-3 gap-y-8 lg:gap-y-0 lg:gap-x-6">
        <!-- isi berita -->
        @if($data)
            <div class="lg:col-span-2">
                <div class="py-8 lg:pe-8">
                    <div class="space-y-5 lg:space-y-8">
                        <h2 class="text-3xl font-bold">{{$data->judul}}</h2>
                        <p class="text-base text-gray-800">{{$data->tanggal_pembuatan}}</p>
                        <div>
                            <img class="w-full h-96 object-cover rounded-xl"
                                src="{{Storage::url('public/storages/berita/' . $data->gambar)}}" alt="Image Description">
                        </div>

                        <p class="text-lg text-gray-800">{{$data->isi}}</p>
                    </div>
                </div>
            </div>
        @else
            <div class="lg:col-span-2">
                <div class="py-8 lg:pe-8">
                    <div class="space-y-5 lg:space-y-8">
                        <h2 class="text-3xl font-bold">Judul Berita</h2>
                        <p class="text-base text-gray-800">January 18, 2023</p>
                        <div>
                            <img class="w-full h-96 object-cover rounded-xl"
                                src="https://images.unsplash.com/photo-1671726203454-488ab18f7eda?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                                alt="Image Description">
                        </div>

                        <p class="text-lg text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi
                            voluptate repellat incidunt repudiandae repellendus sapiente inventore eius quo, harum corrupti
                            officia? Tempora eius vero tempore esse, eligendi possimus vel itaque cum nemo laboriosam earum
                            sed explicabo ratione nam dicta iure voluptas incidunt quaerat blanditiis cumque ex fugit eos
                            autem? Et sapiente corrupti eius saepe. Voluptas eligendi beatae aperiam! Nobis tempore maiores
                            reiciendis delectus quia mollitia eaque dolores. Incidunt commodi aut itaque expedita. Libero,
                            placeat. Nihil voluptates dignissimos commodi et, repudiandae ipsa, sit autem nulla distinctio
                            esse amet quidem voluptas quasi repellat mollitia quia velit eum dicta quae similique dolorum.
                            Repudiandae!</p>
                    </div>
                </div>
            </div>
        @endif
        <!-- end isi berita -->
        <!-- Sidebar berita lainnya -->
        <div
            class="md:mt-10 lg:col-span-1 lg:w-full lg:h-full lg:bg-gradient-to-r lg:from-gray-100 lg:via-transparent lg:to-transparent">
            <div class="sticky top-0 start-0 py-8 lg:ps-8">
                <div class="group flex items-center gap-x-3 border-b border-gray-200 pb-8 mb-8">
                    <div class="group grow block">
                        <h5 class="group-hover:text-gray-600 text-xl font-semibold text-gray-800">
                            Baca Berita Lainnya
                        </h5>
                    </div>
                </div>

                @forelse ($otherData as $beritaLainnya)
                    <div class="space-y-6 mb-3">
                        <a class="group flex items-center gap-x-6" href="{{route('berita', ['id' => $beritaLainnya->id])}}">
                            <div class="grow">
                                <span class="text-md font-bold text-gray-800 group-hover:text-blue-600">
                                    {{$beritaLainnya->judul}}
                                </span>
                            </div>

                            <div class="flex-shrink-0 relative rounded-lg overflow-hidden size-20">
                                <img class="size-full absolute top-0 start-0 object-cover rounded-lg"
                                    src="{{Storage::url('public/storages/berita/' . $beritaLainnya->gambar)}}"
                                    alt="Image Description">
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="space-y-6">
                        <a class="group flex items-center gap-x-6" href="#">
                            <div class="grow">
                                <span class="text-md font-bold text-gray-800 group-hover:text-blue-600">
                                    lorem ipsum dolor sit amet
                                </span>
                            </div>

                            <div class="flex-shrink-0 relative rounded-lg overflow-hidden size-20">
                                <img class="size-full absolute top-0 start-0 object-cover rounded-lg"
                                    src="https://images.unsplash.com/photo-1567016526105-22da7c13161a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1480&q=80"
                                    alt="Image Description">
                            </div>
                        </a>
                    </div>
                    <div class="space-y-6">
                        <a class="group flex items-center gap-x-6" href="#">
                            <div class="grow">
                                <span class="text-md font-bold text-gray-800 group-hover:text-blue-600">
                                    lorem ipsum dolor sit amet
                                </span>
                            </div>

                            <div class="flex-shrink-0 relative rounded-lg overflow-hidden size-20">
                                <img class="size-full absolute top-0 start-0 object-cover rounded-lg"
                                    src="https://images.unsplash.com/photo-1567016526105-22da7c13161a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1480&q=80"
                                    alt="Image Description">
                            </div>
                        </a>
                    </div>
                @endforelse

            </div>
        </div>
        <!-- End Sidebar -->
    </div>
</div>
@endsection