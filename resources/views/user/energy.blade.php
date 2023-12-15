@extends('layouts.frontend')


@section('content')
    <div>
        <div class="w-full flex justify-between items-center mb-32 mt-12">

            <div class="inter px-20 mt-20  w-1/2">
                <div class="text-4xl font-bold">LMP Networks</div>

                <div class="h-1 w-1/2 biru my-3"></div>


                <div class="text-xl">LMP Networks provide Ultra High Density Solution
                    for connectivity in Data Center. Optimizing Space - Air flow
                    and Efficiency in Cooling Systems & Energy consumption.
                </div>
            </div>
            {{-- <div class="relative w-3/5">
                <img class="relative z-20 w-full" src="{{ asset('images/research/1.jpg') }}" alt="">
                <div class="absolute w-full h-full bg-[#E6F6FE] top-8 right-8">

                </div>
            </div> --}}

            <div class="flex relative w-2/5 h-full">
                <div class="flex items-center justify-center w-full">
                    <img class="relative z-20 w-full" src="{{ asset('images/centrinium/bg.jpg') }}" alt="">
                </div>
                <div class="absolute w-full h-full bg-[#E6F6FE] top-8 right-8">

                </div>
            </div>
        </div>
    </div>
@endsection
