@extends('layouts.frontend')


@section('content')
    <div class="py-12 lg:px-20 sm:px-10 px-5">
        <div class="w-full flex lg:flex-row flex-col justify-between items-center mb-14 gap-12">

            <div class="inter  lg:w-1/2">
                <div class="xl:text-4xl lg:text-3xl sm:text-2xl text-xl font-bold mb-5 title">MDC Row Split Package Cooling
                </div>


                <div class="lg:text-xl sm:text-lg mb-5 desc">6k – 20k MDC fully integrated with closed rack,
                    split cooling, UPS, battery, power distribution,
                    security, monitoring and fire systems. Row cooling
                    seamless integration with rack row and capacity
                    expansion.
                </div>

                <div class="flex lg:flex-row flex-col lg:gap-7 gap-4  items-center desc">
                    <div
                        class="font-semibold cursor-pointer hover:bg-white hover:border-2 hover:text-biru duration-300 hover:border-[#1780BB] border-2 border-[#3F73AE] py-3 px-4 bg-[#3F73AE] text-white rounded-md max-lg:w-full max-lg:text-center">
                        Pre
                        Order</div>
                    <div
                        class="font-semibold cursor-pointer py-3 px-4 biru text-white rounded-md max-lg:w-full max-lg:text-center hover:bg-white hover:border-2 hover:text-biru duration-300 hover:border-[#3F73AE] border-2 border-[#1780BB]">
                        Get Brochure</div>

                </div>
            </div>
            {{-- <div class="relative w-3/5">
                <img class="relative z-20 w-full" src="{{ asset('images/research/1.jpg') }}" alt="">
                <div class="absolute w-full h-full bg-[#E6F6FE] top-8 right-8">

                </div>
            </div> --}}
            <div class="flex items-center xl:justify-center lg:justify-end w-1/2">
                <img class="relative z-20 " src="{{ asset('images/product/mdc/MDC Row Split.png') }}" alt="">
            </div>
        </div>

        <div>
            <div class="text-biru font-semibold lg:text-3xl sm:text-2xl text-xl mb-8 title">
                Key Characteristics
            </div>

            <div class="flex flex-col justify-center gap-4 lg:mb-12 {{ 'item-' . $i }}">
                @php
                    $char = ['Standard 19-inch server cabinet, glass front door, sheet metal back door', '3 in 1 access control system(Pin/Fingerprint/RFID) and video monitoring system', 'Rack mount power distribution, metering, and management for all the power lines', '2.5kW – 90kW rack / row mount precision cooling, seamlessly matched to the rack.', '48VDC power, or 3kVA – 200kVA rack mount or modular UPS system protect power continuity', 'Independent cold / hot closed aisle are integrated at the front and rear of the cabinet, respectively', 'Standard 10-inch integrated touch monitor screen, the monitoring system does not take up U space of the cabinet'];
                @endphp
                @for ($i = 0; $i < 7; $i++)
                    <div class="flex items-center gap-2 text-lg">
                        <div class="lg:min-h-3  lg:min-w-3 min-w-2 min-h-2 bg-[#A0A0A0] rounded-full"></div>
                        <div class="max-lg:text-sm">{{ $char[$i] }}</div>
                    </div>
                @endfor
            </div>

        </div>
    </div>

    <script>
        ScrollReveal().reveal('.image', {
            delay: 750,
            duration: 1000,
            distance: '800px',
            opacity: 1,
            origin: 'right',
        });

        ScrollReveal().reveal('.title', {
            delay: 300,
            duration: 1000,
            distance: '100px',
            origin: 'bottom'
        });

        ScrollReveal().reveal('.desc', {
            delay: 500,
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
        for (let i = 0; i < 10; i++) {
            ScrollReveal().reveal('.item-' + i, {
                delay: 500 + i * 100,
                duration: 1000,
                distance: '100px',
                origin: 'bottom'
            });
        }

        for (let i = 0; i < 3; i++) {
            ScrollReveal().reveal('.product-' + i, {
                delay: 500 + i * 100,
                duration: 1000,
                distance: '100px',
                origin: 'bottom'
            });
        }
    </script>
@endsection
