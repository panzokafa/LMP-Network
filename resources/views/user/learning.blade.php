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


    </div>

    <script>
        ScrollReveal().reveal('.content', {
            delay: 300,
            duration: 1000,
            distance: '100px',
            origin: 'bottom'
        });
    </script>
@endsection
