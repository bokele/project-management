<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    {{-- @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- @endif --}}
</head>

<body lass="font-sans antialiased dark:bg-black dark:text-white/50 bg-gray-100">
    <div id="content"
        class="flex flex-col mx-auto size-full bg-gradient-to-t from-indigo-900 to-gray-900 overflow-hidden w-full md:h-screen ">
        <div class="absolute inset-0 flex w-full justify-center overflow-hidden">
            <div class="absolute inset-0 bg-cover bg-repeat opacity-[0.035]"
                style="background-size: 16px; background-image: url({{ asset('images/dots-h07H41tc.svg') }})">
            </div>
            <img x-data="{ show: false }" x-init="show = true" :class="{ '!opacity-100': show }"
                src="{{ asset('images/gradient-BbIaHq5H.png') }}" alt="gradients"
                class="w-[2400px] max-w-none opacity-0 mix-blend-color-dodge blur-[10px] transition-all delay-500 duration-1000 !opacity-100">
        </div>
        <div>
            @include('partials.header')


            <div class="relative isolate px-6 pt-14 lg:px-8">
                <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                    aria-hidden="true">
                    <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                    </div>
                </div>
                <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">

                    <div class="text-center">
                        <h1 class="text-5xl font-semibold tracking-tight text-balance text-gray-200 sm:text-7xl">Data to
                            enrich your online business</h1>
                        <p class="mt-8 text-lg font-medium text-pretty text-gray-200 sm:text-xl/8">Anim aute id magna
                            aliqua
                            ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam
                            occaecat.</p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <a href="#"
                                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                                started</a>
                            <a href="#"
                                class="rounded-md   px-3.5 py-2.5 tex-sm font-semibold text-gray-900 bg-gray-200 hover:bg-gray-100">Contact
                                Us </a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                    aria-hidden="true">
                    <div class="relative left-[calc(50%+3rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">


                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('pages.pricing')
    @include('pages.features')
    @include('partials.footer')
    </div>

</body>

</html>
