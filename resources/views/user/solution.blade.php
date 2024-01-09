@extends('layouts.frontend')


@section('content')
    <div class="py-12 max-lg:px-7 lg:pb-2">

            <div class="w-full flex lg:flex-row flex-col-reverse justify-between items-center sm:mb-36 mb-28">

                <div class="inter lg:pl-20 lg:w-3/4 text-center lg:text-left 2xl:mt-0 relative lg:top-10 top-14">

                    <div class="max-w-max max-lg:mx-auto title">
                        <div class="2xl:text-4xl lg:text-3xl sm:text-2xl text-xl  font-bold max-lg:px-10 ">
                            LMP Service & Learning Center
                        </div>

                        <div class="h-1 lg:w-[115%] w-full biru sm:my-3 my-2 max-lg:mb-5"></div>

                    </div>

                    <div class="lg:text-xl sm:text-lg lg:mb-3 sm:leading-8 lg:leading-7 lg:w-3/4 desc">
                        Whether it's engineering, on-site project management,
                        energy-consumption monitoring, or something else,
                        LMP offers a wide range of programs and services to
                        support critical infrastructure needs
                    </div>

                </div>
            </div>

        <div class="w-full flex lg:flex-row flex-col-reverse justify-between items-center gap-14 sm:mb-36 mb-28 px-28">

            <div class="flex relative  lg:w-5/12 h-full  max-lg:left-3 image-1">
                <div class=" flex items-center justify-center w-full">
                    <div class="absolute z-30 p-10 py-24">
                        <div class="bruno xl:text-xl lg:text-xl sm:text-lg text-xs text-white text-center px-5">
                            Service & Learning Center
                        </div>
                        <div class="w-full relative sm:h-1 h-0.5 bg-white"></div>
                    </div>
                    <img class="relative z-20 w-full lg:right-24 lg:top-12 right-0 left-0" src="{{ asset('images/learning/service.jpg') }}" alt="">
                </div>
                <div class="absolute w-full h-full border-2 border-[#3F73AE] lg:top-7 lg:bottom-10 lg:right-7 right-3 top-3 ">

                </div>
            </div>


            <div class="flex relative lg:w-5/12 h-full max-lg:left-3 image-1">
                <div class="flex items-center justify-center w-full">
                    <img class="relative z-20 w-full lg:right-24 lg:top-12 right-0 left-0" src="{{ asset('images/learning/bg.jpg') }}" alt="">
                </div>
                <div class="absolute w-full h-full border-2 border-[#3F73AE] lg:top-7 lg:bottom-10 lg:left-7 right-3 top-3 ">

                </div>
            </div>
        </div>



{{-- barU --}}
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
        ScrollReveal().reveal('.image-1', {
            delay: 350,
            duration: 1000,
            distance: '800px',
            opacity: 1,
            origin: 'right',
        });

        ScrollReveal().reveal('.title', {
            delay: 700,
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
