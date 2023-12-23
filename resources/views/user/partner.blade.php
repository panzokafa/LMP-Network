@extends('layouts.frontend')


@section('content')
    <div class="relative flex items-center justify-center max-lg:h-[35vh]">
        <div class="absolute px-5 z-20 header">
            <div class="font-bold mb-3 text-white lg:text-5xl text-4xl lg:px-12 px-8 text-center">LMP Partner </div>
            <div class="w-full h-1 biru"></div>
        </div>
        <img class="object-cover w-full h-full banner" src="{{ asset('images/partner/bg.jpg') }}" alt="">
    </div>

    <div
        class="flex flex-wrap lg:gap-x-24 gap-x-14 lg:gap-y-36 gap-y-24 w-full justify-center items-center sm:py-24 py-14 lg:px-44 sm:px-10 px-8">
        @for ($i = 1; $i < 9; $i++)
            <img class="{{ 'partner-' . $i }} max-lg:w-[130px]" src="{{ asset('images/partner/' . $i . '.png') }}"
                alt="">
        @endfor
    </div>

    <script>
        ScrollReveal().reveal('.header', {
            delay: 300,
            duration: 1000,
            origin: 'bottom',
            distance: '50px',
        });

        ScrollReveal().reveal('.banner', {
            scale: 1.1,
            opacity: 1,
            duration: 5000,

        });

        for (let i = 1; i < 9; i++) {
            ScrollReveal().reveal('.partner-' + i, {
                delay: 700 + i * 100,
                duration: 1000,
                distance: '100px',
                origin: 'bottom'
            });
        }
    </script>
@endsection
