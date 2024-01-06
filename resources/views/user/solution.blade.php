@extends('layouts.frontend')


@section('content')
    <div class="py-12 max-lg:px-7 lg:pb-2">
        <x-top-section title="LMP Service & Learning Center"
            desc="Whether it's engineering, on-site project management,
            energy-consumption monitoring, or something else,
            LMP offers a wide range of programs and services to
            support critical infrastructure needs"
            image="learning/bg.jpg" />

        <div class="content lg:px-20 flex flex-wrap lg:gap-28 gap-14 items-center justify-center lg:pb-36 pb-20">
            @php
                $text = [
                    'Data Center Design',
                    'Data Center Cooling
Management Assessment',
                    'MPO Tier 1 Testing',
                ];
            @endphp
            @for ($i = 1; $i < 4; $i++)
                {{-- <div
                    class="{{ 'support-' . $i }} relative biru flex flex-col items-center justify-center text-center p-8 rounded-lg">
                    <img class="mb-7 relative z-20" src="{{ asset('images/support/' . $i . '.png') }}" alt="">

                    <div class="lg:text-2xl sm:text-xl text-lg text-white font-bold ">{{ $text[$i - 1] }}</div>
                </div> --}}

                <x-box image='learning/{{ $i }}' title="{{ $text[$i - 1] }}" />
            @endfor
        </div>

        <div class="flex lg:flex-row flex-col items-center justify-center lg:justify-evenly lg:gap-6 gap-4 lg:pb-8    max-lg:px-7  text-lg">
            <div class="text-biru cursor-pointer link">Project Service <div
                    class="inline opacity-0 duration-300 arrow ml-1">->
                </div>
            </div>
            <div class="text-biru cursor-pointer link">Rack PDU Service <div
                    class="inline opacity-0 duration-300 arrow ml-1">->
                </div>
            </div>
            <div class="text-biru cursor-pointer link">UPS & Battery Service <div
                    class="inline opacity-0 duration-300 arrow ml-1">->
                </div>
            </div>
            <div class="text-biru cursor-pointer link">Electrical Safety & Compliance <div
                    class="inline opacity-0 duration-300 arrow ml-1">
                    ->
                </div>
            </div>
        </div>

        <div class="flex lg:flex-row flex-col items-center lg:gap-6 gap-4  justify-center lg:justify-evenly mb-1 lg:mb-28 py-4 lg:py-8 max-lg:px-7 lg:pb-2 text-lg">
            <div class="text-biru cursor-pointer link">Thermal Service <div
                    class="inline opacity-0 duration-300 arrow ml-1">->
                </div>
            </div>
            <div class="text-biru cursor-pointer link">DC Power Service <div
                    class="inline opacity-0 duration-300 arrow ml-1">->
                </div>
            </div>
            <div class="text-biru cursor-pointer link">Electrical Reliability Service <div
                    class="inline opacity-0 duration-300 arrow ml-1">->
                </div>
            </div>
        </div>

    </div>

    <script>
        ScrollReveal().reveal('.content', {
            delay: 300,
            duration: 1000,
            distance: '100px',
            origin: 'bottom'
        });
    </script>
    <style>
        .link:hover .arrow {
            opacity: 100%;
        }
    </style>
@endsection
