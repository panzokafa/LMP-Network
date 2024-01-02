@extends('layouts.frontend')


@section('content')
    <div class="py-12 lg:px-20 sm:px-10 px-5">
        <div class="w-full flex lg:flex-row flex-col justify-between items-center mb-14 gap-12">

            <div class="inter  lg:w-1/2">
                <div class="title xl:text-4xl lg:text-3xl sm:text-2xl text-xl font-bold mb-5">1-Rack MDC With Rack Cooling
                </div>


                <div class="desc lg:text-xl sm:text-lg mb-5">MDC fully integrated with 1 rack space, rack  cooling, AC/DC
                    power,
                    battery,
                    power distribution, security, monitoring and fire systems, IP55 protection
                    and thermal insulated for outdoor deployment.
                </div>

                <div class="desc flex lg:flex-row flex-col lg:gap-7 gap-4  items-center">
                    <div
                        class="font-semibold cursor-pointer hover:bg-white hover:border-2 hover:text-biru duration-300 hover:border-[#1780BB] border-2 border-[#3F73AE] py-3 px-4 bg-[#3F73AE] text-white rounded-md max-lg:w-full max-lg:text-center">
                        Pre
                        Order</div>
                    <div
                        class="font-semibold cursor-pointer py-3 px-4 biru text-white rounded-md max-lg:w-full max-lg:text-center hover:bg-white hover:border-2 hover:text-biru duration-300 hover:border-[#3F73AE] border-2 border-[#1780BB]">
                        Get Brochure</div>

                </div>
            </div>
            <div class="flex items-center xl:justify-center lg:justify-end w-1/2 image">
                <img class="relative z-20 " src="{{ asset('images/product/rack/1-Rack.png') }}" alt="">
            </div>
        </div>

        <div>
            <div class="title text-biru font-semibold lg:text-3xl sm:text-2xl text-xl mb-8">
                Key Characteristics
            </div>

            <div class="flex flex-col justify-center gap-4 mb-20 lg:mb-12">
                @php
                    $char = ['Fully insulated standard 19 inch rack system', 'All in one monitoring host collects, locally and remotely', 'RFID access control system and video monitoring system', 'Provide professional protective space for  outdoor condensers', 'Gas fire extinguishing system triggered by smoke and temperature', 'Optional lead-acid batteries and lithium-ion batteries (Rack-mount)', '3k – 30kVA rack mount modular UPS/DC Power system protect power continuity', '3.9kW – 31.1kW precision cooling powered by UPS in rack mount, and row mount type', 'Rack mount power distribution, metering, and management for all the power lines.'];
                @endphp
                @for ($i = 0; $i < 9; $i++)
                    <div class="flex items-center gap-2 text-lg {{ 'item-' . $i }}">
                        <div class="lg:min-h-3  lg:min-w-3 min-w-2 min-h-2 bg-[#A0A0A0] rounded-full"></div>
                        <div class="max-lg:text-sm">{{ $char[$i] }}</div>
                    </div>
                @endfor
            </div>

            <div class="lg:text-3xl sm:text-2xl text-xl font-semibold text-biru mb-7 title">
                Similar products
            </div>

            <div class="grid lg:grid-cols-2 grid-cols-1 gap-4">
                @php
                    $image = ['2-Rack', '2-Rack Row', '3-Rack'];
                    $title = ['2-Rack MDC With Rack Cooling', '2-Rack MDC With Row Cooling', '3-Rack MDC With Rack Cooling'];
                    $desc = [
                        '5k – 10k MDC fully integrated with closed rack,
                    package cooling, UPS, battery, power distribution,
                    security, monitoring and fire systems. No complex
                    piping of remote condenser installation.',
                        '6k – 20k MDC fully integrated with closed rack,
                    split cooling, UPS, battery, power distribution, 
                    security, monitoring and fire systems. Row cooling
                    seamless integration with rack row and capacity 
                    expansion.',
                        '3k – 10k MDC fully integrated with closed rack, rack
                    mount cooling, UPS, battery, power distribution,
                    security, monitoring and fire systems. Modular rack
                    cooling flexible for rack oriented MDC plan, 
                    expansion and deployment.',
                    ];
                    $route = ['product.rack.2', 'product.rack.2.row', 'product.rack.3'];
                @endphp
                @for ($i = 0; $i < 3; $i++)
                    <div class="{{ 'product-' . $i }}"><x-product.box title="{{ $title[$i] }}" desc="{{ $desc[$i] }}"
                            route="{{ $route[$i] }}" image="{{ 'rack/' . $image[$i] }}" />
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
        for (let i = 0; i < 9; i++) {
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
