@extends('layouts.frontend')


@section('content')
    <div class="py-12 max-lg:px-7 lg:pb-2">
        <div class="w-full flex lg:flex-row flex-col-reverse justify-between items-center sm:mb-36 mb-28 max-lg:pt-14">

            <div class="inter lg:pl-20 lg:w-1/2 text-center lg:text-left 2xl:mt-0 relative lg:top-10 top-14">

                <div class="title max-w-max max-lg:mx-auto ">
                    <div class="2xl:text-4xl lg:text-3xl sm:text-2xl text-xl  font-bold max-lg:px-10 whitespace-nowrap">LMP
                        Support & Learning Center
                    </div>

                    <div class="h-1 lg:w-[130%] w-full biru sm:my-3 my-2"></div>

                </div>

                <div class="desc sm:text-xl sm:text-lg lg:mb-3 sm:leading-8 leading-7">Locate your specific product for the
                    latest
                    user
                    manuals, system application guides, data sheets,
                    warranties, software downloads and more.
                </div>
            </div>


            <div class="image-1 flex relative lg:w-2/5 h-full relative max-lg:left-3">
                <div class="flex items-center justify-center w-full">
                    <img class="relative z-20 w-full" src="{{ asset('images/learning/bg.jpg') }}" alt="">
                </div>

                <div class="absolute w-full h-full border-2 border-[#3F73AE] lg:top-7 lg:right-7 right-3 top-3 right75">

                </div>
            </div>
        </div>

        <div class="lg:px-20 flex flex-wrap lg:gap-28 gap-14 items-center justify-center lg:pb-36 pb-20 desc">
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
        ScrollReveal().reveal('.image-1', {
            delay: 350,
            duration: 1000,
            distance: '800px',
            opacity: 1,
            origin: 'right',
        });
        ScrollReveal().reveal('.image-2', {
            delay: 350,
            duration: 1000,
            distance: '800px',
            opacity: 1,
            origin: 'left',
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

        ScrollReveal().reveal('.desc-2', {
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
        ScrollReveal().reveal('.fade', {
            delay: 500,
            duration: 1000,
            opacity: 0,
            distance: '50px',
            origin: 'bottom'
        });
    </script>
@endsection
