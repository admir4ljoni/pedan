<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-24 w-24" src="/assets/logo smk pedan.png" alt="logo">
            <h2 class="mt-5 text-center text-2xl font-extrabold leading-9 tracking-tight text-primaryColor uppercase">
                login admin</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{route('loginActual')}}" method="POST">
                @csrf
                <div class="">
                    <x-input id="email" name="email" type="email" title="Email address" required />
                    <x-input id="password" name="password" type="password" title="password" required />
                </div>
                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-primaryColor hover:bg-blue-900 px-3 py-3 text-base font-semibold leading-6 text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 ">LOG
                        IN</button>
                </div>
            </form>
            <p class="mt-10 text-center text-md text-gray-500">
                Belum memiliki Akun?
                <a href="/admin/register" class="font-semibold text-md leading-6 text-primaryColor">Daftar Disini</a>
            </p>
        </div>
    </div>

</body>

</html>