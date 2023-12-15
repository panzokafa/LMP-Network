@extends('layouts.frontend')


@section('content')
    <div class="py-36 px-36">
        <div class="flex flex-col gap-3 mx-auto max-w-max relative mb-28">
            <img class="scale-50 absolute left-[-130px] top-[-120px]" src="{{ asset('images/dot1.png') }}" alt="">
            <div class="font-bold mb-3 text-5xl px-24 relative z-10">Contact Us</div>
            <div class="w-full h-1 biru relative z-10"></div>
        </div>

        <div class="flex px-32 flex-wrap gap-20 justify-center items-center">
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
                <div class="flex flex-col items-center justify-center w-1/5 text-center">
                    <img class="mb-12" src="{{ asset('images/contact/' . $i . '.png') }}" alt="">

                    <div class="font-bold text-2xl mb-14">{{ $title[$i - 1] }}</div>

                    <div class="font-medium">{{ $desc[$i - 1] }}t</div>
                </div>
            @endfor
        </div>
    </div>

    <iframe class="w-full"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126912.93829569164!2d106.97410210163002!3d-6.259867982243107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698bfc218780ad%3A0x1b77c8726545aab5!2sLMP%20NETWORKS%20-%20HARAPAN%20INDAH!5e0!3m2!1sid!2sid!4v1702192197729!5m2!1sid!2sid"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

    <div class="flex flex-col items-center justify-center py-12 biru-muda">
        <div class="tracking-[5px] font-semibold opensans text-3xl mb-2">SUBSCRIBE</div>
        <div class="mb-6 text-xl inter">Join us to receive product news and industry updates from us</div>
        <div class="text-biru inter font-bold text-xl px-5 py-3 bg-white border border-[#2D5290] rounded cursor-pointer">
            JOIN WITH US
        </div>
    </div>
@endsection
