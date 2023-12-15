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
                    <img class="relative z-20 w-full" src="{{ asset('images/network/bg.jpg') }}" alt="">
                </div>
                <div class="absolute w-full h-full bg-[#E6F6FE] top-8 right-8">

                </div>
            </div>
        </div>
        <div class="px-20">
            <div class="text-2xl mb-26 w-1/3">
                Provide interconnect and cross-connect of applications over installations
                in entrance facilities, telecommunications rooms, data center and at the desk.
            </div>

            <div class="flex flex-wrap gap-36 justify-center items-center mb-28">
                @php
                    $text = ['Single Mode Patchcord Jumper', 'Multi Mode OM3 Jumper', 'Multi Mode OM4 Jumper'];
                @endphp
                @for ($i = 1; $i < 4; $i++)
                    <div class="text-center">
                        <img src="{{ asset('images/network/' . $i . '.png') }}" alt="">

                        <div class="text-medium mb">LMP Networks®</div>
                        <div class="text-medium mb">{{ $text[$i - 1] }}</div>
                        <div>LC-LC</div>

                    </div>
                @endfor
            </div>

            <div class="text-2xl w-2/3 mb-36">
                Patch cords support network applications in main, horizontal and equipment
                distribution areas and are available in low smoke zero halogen (LSZH) rated
                jacket materials to comply with local cabling ordinances. Pre-terminated fiber
                optic pigtails support fusion splice field termination applications.
            </div>
        </div>
    </div>
@endsection
