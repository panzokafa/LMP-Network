@extends('layouts.frontend')


@section('content')
    <div class="lg:py-36 py-20 lg:px-32 sm:px-12 px-5">
        <div class="flex flex-col gap-3 mx-auto max-w-max relative lg:mb-28 mb-14">
            <img class="lg:scale-50 scale-[35%] absolute left-[-130px] top-[-120px]" src="{{ asset('images/dot1.png') }}"
                alt="">
            <div class="title font-bold lg:mb-3 mb-2 tlg:ext-5xl text-4xl lg:px-24 px-12 relative z-10 text-center">Contact
                Us
            </div>
            <div class="title w-full h-1 biru relative z-10"></div>
        </div>

        <div class="grid xl:grid-cols-4 sm:grid-cols-2 gap-20 justify-center items-center">
            @php
                $title = ['Visit Us', 'WhatsApp', 'Call Us', 'Email'];

                $desc = [
                    'Harapan Indah Boulevard
Jl. Sentra Niaga No.7
Bekasi - Jawa Barat',
                    '(+62 21) 82692369',
                    '(+62 21) 82692369',
                    'info@lmp-networks.com',
                ];
            @endphp
            @for ($i = 1; $i < 5; $i++)
                <div class="{{ 'contact-' . $i }} flex flex-col items-center justify-center text-center">
                    <img class="xl:mb-12 mb-10" src="{{ asset('images/contact/' . $i . '.png') }}" alt="">

                    <div class="font-bold text-2xl xl:mb-14 mb-7">{{ $title[$i - 1] }}</div>

                    <div class="font-medium max-sm:px-5">{{ $desc[$i - 1] }}</div>
                </div>
            @endfor
        </div>
    </div>

    <iframe class="w-full fade"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126912.93829569164!2d106.97410210163002!3d-6.259867982243107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698bfc218780ad%3A0x1b77c8726545aab5!2sLMP%20NETWORKS%20-%20HARAPAN%20INDAH!5e0!3m2!1sid!2sid!4v1702192197729!5m2!1sid!2sid"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

    <div class="flex fade flex-col items-center justify-center lg:py-12 py-8 px-5 biru-muda text-center">
        <div class="tracking-[5px] font-semibold opensans lg:text-3xl text-2xl mb-3">SUBSCRIBE</div>
        <div class="lg:mb-6 mb-4 lg:text-xl text-lg inter">Join us to receive product news and industry updates from us
        </div>
        <div
            class="text-biru inter font-bold lg:text-xl text-lg lg:px-5 px-3 lg:py-3 py-2 bg-white border border-[#2D5290] rounded cursor-pointer">
            JOIN WITH US
        </div>
    </div>

    <script>
        for (let i = 1; i < 5; i++) {
            ScrollReveal().reveal('.contact-' + i, {
                delay: 700 + i * 100,
                duration: 1000,
                distance: '100px',
                origin: 'bottom'
            });

            ScrollReveal().reveal('.title', {
                delay: 700,
                duration: 1000,
                distance: '100px',
                origin: 'bottom'
            });

            ScrollReveal().reveal('.title-2', {
                delay: 350,
                duration: 1000,
                distance: '100px',
                origin: 'bottom'
            });

            ScrollReveal().reveal('.desc', {
                delay: 1000,
                duration: 1000,
                distance: '100px',
                origin: 'bottom'
            });
            ScrollReveal().reveal('.fade', {
                delay: 500,
                duration: 1000,
                opacity: 0,
                distance: '50px',
                origin: 'bottom'
            });
        }
    </script>
@endsection
