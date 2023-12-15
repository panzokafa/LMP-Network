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

        <div class="px-20">
            <div class="text-2xl mb-28 w-1/3">
                Provide interconnect and cross-connect of applications over installations
                in entrance facilities, telecommunications rooms, data center and at the desk.
            </div>

            <div class="flex flex-wrap gap-36 justify-center items-center mb-28">
                @php
                    $text = ['Centrinium™️ UHD Series 1U 144F - LMP Networks®', 'Centrinium™ UHD Series 2U – 288F', 'Centrinium™ UHD Series 4U – 576F'];
                @endphp
                @for ($i = 1; $i < 4; $i++)
                    <div class="text-center flex flex-col items-center">
                        <img class="mb-4" src="{{ asset('images/centrinium/' . $i . '.png') }}" alt="">

                        <div class="text-medium mb">{{ $text[$i - 1] }}</div>
                        <div class="text-medium mb">{{ $i > 1 ? '48 Modules adapter panels. MPO - 6 LC DX Adapter' : '' }}
                        </div>

                    </div>
                @endfor
            </div>

            <div class="font-medium text-2xl text-center mb-14">
                There are two type of module, Pre-conn type for MPO – LC and splice type for splicing method.
            </div>

            <div class="text-2xl w-2/3 mb-28">
                This solution makes it easier for network architects to design networks according to their needs
                Because of this versatility, the enclosure is able to serve as a transition from backbone cabling to
                distribution switching, an interconnect to active equipment, or as a cross-connect or interconnect
                in a main or horizontal distribution area. Users can even easily access the fibres through front
                pull out Modules.
            </div>

            <div class="w-full flex justify-end text-xl mb-14 cursor-pointer">
                PRODUCT ->
            </div>
        </div>
    </div>

    </div>
@endsection
