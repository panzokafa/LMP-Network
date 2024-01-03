@extends('layouts.frontend')


@section('content')
    <div class="py-12 lg:px-20 sm:px-10 px-5">
        <div class="w-full flex lg:flex-row flex-col justify-between items-center mb-14 gap-12">

            <div class="inter  lg:w-1/2">
                <div class="xl:text-4xl lg:text-3xl sm:text-2xl text-xl font-bold mb-5 title">MDC With Rack Split Package Cooling
                </div>


                <div class="lg:text-xl sm:text-lg mb-5 desc">3k – 10k MDC fully integrated with closed rack, rack
                    mount cooling, UPS, battery, power distribution,
                    security, monitoring and fire systems. Modular rack
                    cooling flexible for rack oriented MDC plan,
                    expansion and deployment.
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
                <img class="relative z-20 " src="{{ asset('images/product/mdc/MDC Rack Split.png') }}" alt="">
            </div>
        </div>

        <div>
            <div class="text-biru font-semibold lg:text-3xl sm:text-2xl text-xl mb-8 title">
                Key Characteristics
            </div>

            <div class="flex flex-col justify-center gap-4 mb-20 lg:mb-12">
                @php
                    $char = [
                        'Support global customized services',
                        'Plug and play design, available online in 10 minutes at the fastest',
                        'Cabinet covered with insulation material to prevent condensation',
                        'Fully enclosed design, dust and noise reduction, protection level up to IP55',
                        'Rack-level cooling, cold and hot aisle isolation, high efficiency, the PUE values as low as 1.3',
                        'The front and rear doors of the cabinet are equipped with a 3 in 1 access control system',
                        'Cabinets, power distribution and cooling units have a variety of forms and specifications for flexible application',
                        'Standard 10-inch integrated touch monitor screen, the monitoring system does not take up U space of the cabinet',
                        'Support remote web, APP and centralized  monitoring, support monitoring protocols such as Modbus-TCP, SNMPV1 / V2, BACnet',
                        'The cabinet is equipped with an emergency pop-up door system as standard, which can automatically open the
front and rear doors in the event of a high temperature or fire alarm',
                    ];
                @endphp
                @for ($i = 0; $i < 10; $i++)
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
                    $image = ['MDC Top', 'MDC Row Package', 'MDC Row Split'];
                    $title = ['MDC With Top Packgae Cooling', 'MDC With Row Package Cooling', 'MDC With Row Split Package Cooling'];
                    $desc = [
                        '3k – 6k MDC fully integrated with closed rack,
                    package cooling, UPS, battery, power distribution, 
                    security, monitoring and fire systems. No complex
                    piping of remote condenser installation.',
                        '5k – 10k MDC fully integrated  with closed rack,
            package cooling, UPS, battery, power distribution,
            security, monitoring and fire systems. No complex
            piping of remote  condenser installation.',
                        '3k – 10k MDC fully integrated with closed rack, rack
                    mount cooling, UPS, battery, power distribution,
                    security, monitoring and fire systems. Modular rack
                    cooling flexible for rack oriented MDC plan, 
                    expansion and deployment.',
                    ];
                    $route = ['product.mdc.top', 'product.mdc.row-package', 'product.mdc.rack-split'];
                @endphp
                @for ($i = 0; $i < 3; $i++)
                    <div class="{{ 'product-' . $i }}"><x-product.box title="{{ $title[$i] }}" desc="{{ $desc[$i] }}"
                            route="{{ $route[$i] }}" image="{{ 'mdc/' . $image[$i] }}" />
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
