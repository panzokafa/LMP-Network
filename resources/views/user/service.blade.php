@extends('layouts.frontend')


@section('content')
    <div class="lg:px-20 sm:px-10 px-5 lg:py-36 sm:py-20 py-12">

        <div class="inter lg:mb-28 mb-14 lg:w-1/2 text-center lg:text-left">

            <div class="max-w-max max-lg:mx-auto title">
                <div class="2xl:text-4xl xl:text-3xl sm:text-2xl text-xl font-bold max-lg:px-10">Product & Solution</div>

                <div class="h-1 lg:w-[130%] w-full biru lg:my-5 my-3"></div>
            </div>

            <div class="desc lg:text-lg lg:pr-8 sm:text-lg">LMP offers essential infrastructure technology and
                specialized solutions that can be swiftly implemented
                to meet your business needs
            </div>
        </div>
        <div class="grid lg:grid-cols-2 lg:gap-36 gap-20">
            <div class="item">
                <div class="mb-5">
                    <a href="{{ route('network') }}" class="xl:text-4xl lg:text-4xl sm:text-3xl text-2xl mb-5">LMP
                        Networks</a>
                </div>

                <div class="lg:text-lg mb-12">LMP Networks provide Ultra High Density Solution
                    for connectivity in Data Center. Optimizing Space - Air flow
                    and Efficiency in Cooling Systems & Energy consumption</div>

                <div class="flex flex-col lg:gap-6 gap-4">
                    <div class="text-biru cursor-pointer link">Cable Fiber Optic
                        <div
                            class="inline opacity-0 duration-300 arrow ml-1">->
                        </div>
                    </div>
                    <div class="text-biru cursor-pointer link">Patchcord <div
                            class="inline opacity-0 duration-300 arrow ml-1">->
                        </div>
                    </div>
                    <div class="text-biru cursor-pointer link">Enclosure <div
                            class="inline opacity-0 duration-300 arrow ml-1">->
                        </div>
                    </div>
                    <div class="text-biru cursor-pointer link">Accessories <div
                            class="inline opacity-0 duration-300 arrow ml-1">
                            ->
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="mb-5">
                    <a href="{{ route('energy') }}" class="xl:text-4xl lg:text-4xl sm:text-3xl text-2xl mb-5">LMP Renewable
                        Energy</a>
                </div>

                <div class="sm:text-lg mb-12">Renewable Energy is inexhaustible and canbe harnessed
                    continuously without depleting natural resources ensuring
                    long term sustainability</div>

                <div class="flex flex-col lg:gap-6 gap-4">
                    <div class="text-biru cursor-pointer link">Energy Storage <div
                            class="inline opacity-0 duration-300 arrow ml-1">->
                        </div>
                    </div>
                    <div class="text-biru cursor-pointer link">Electrolyzer <div
                            class="inline opacity-0 duration-300 arrow ml-1">->
                        </div>
                    </div>
                    <div class="text-biru cursor-pointer link">Fuel Cell <div
                            class="inline opacity-0 duration-300 arrow ml-1">->
                        </div>
                    </div>
                    <div class="text-biru cursor-pointer link">End To End Hydrogen Solution <div
                            class="inline opacity-0 duration-300 arrow ml-1">->
                        </div>
                    </div>
                </div>
            </div>

            <div class="item relative z-10">
                <div class="mb-5 relative">
                    <a href="{{ route('centrinium') }}"
                        class="relative z-10 xl:text-4xl lg:text-4xl sm:text-3xl text-2xl mb-5">LMP
                        Centrinium</a>

                    <img class="absolute w-36 left-[-100px] top-[-100%]" src="{{ asset('images/dot1.png') }}"
                        alt="">
                </div>

                <div class="sm:text-lg mb-12 relative z-10">LMP Centrinium provide wide range product solution
                    for Physical EDGE Data Center. from Cabinet Data
                    Center to Container Data Center, include Cooling System,
                    Electrical Panel, Power House, Energy Storage, Fire
                    Suppression Systems, Monitoring Systems and DCIM.</div>

                <div class="flex flex-col lg:gap-6 gap-4">
                    <a href="{{ route('product.containment.centrinium-containment') }}"
                        class="text-biru cursor-pointer link">Centrinium <div
                            class="inline opacity-0 duration-300 arrow ml-1">
                            ->
                        </div>
                    </a>
                    <div class="text-biru cursor-pointer flex gap-4 relative max-w-max hover-link">
                        <div> Rack MDC <div class="inline opacity-0 duration-300 arrow ml-1">->
                            </div>
                        </div>
                        <div
                            class="link invisible duration-300 opacity-0 border-[0.5px] border-black text-black text-sm absolute lg:left-[100%] left-[90%] whitespace-nowrap z-10 bg-white rounded-lg rounded-tl-none overflow-hidden">
                            <a href="{{ route('product.rack.1') }}"
                                class="py-2 px-4 border-b hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs">1-Rack
                                MDC With Rack Cooling</a>
                            <a href="{{ route('product.rack.2') }}"
                                class="py-2 px-4 border-b hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs">2-Rack
                                MDC With Rack Cooling</a>
                            <a href="{{ route('product.rack.2.row') }}"
                                class="py-2 px-4 border-b hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs">2-Rack
                                MDC Row With Rack Cooling</a>
                            <a href="{{ route('product.rack.3') }}"
                                class="py-2 px-4 hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs">3-Rack
                                MDC With Rack Cooling</a>

                        </div>

                    </div>

                    <div class="text-biru cursor-pointer flex gap-4 relative max-w-max hover-link">
                        <div> Outdoor MDC <div class="inline opacity-0 duration-300 arrow ml-1 link">->
                            </div>

                        </div>


                    </div>


                    <div class="text-biru cursor-pointer flex gap-4 relative max-w-max hover-link">
                        <div> Row MDC <div class="inline opacity-0 duration-300 arrow ml-1">->
                            </div>
                        </div>
                        <div
                            class="z-20 link invisible duration-300 opacity-0 border-[0.5px] border-black text-black text-sm absolute lg:left-[100%] left-[90%] whitespace-nowrap z-10 bg-white rounded-lg rounded-tl-none overflow-hidden">
                            <a href="{{ route('product.mdc.top') }}"
                                class="py-2 px-4 border-b hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs">MDC
                                With
                                Top Cooling</a>
                            <a href="{{ route('product.mdc.row') }}"
                                class="py-2 px-4 border-b hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs">MDC
                                With
                                Row Cooling</a>
                            <a href="{{ route('product.mdc.rack-split') }}"
                                class="py-2 px-4 border-b hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs">MDC
                                With
                                Rack Split Cooling</a>
                            <a href="{{ route('product.mdc.row-split') }}"
                                class="py-2 px-4 hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs">MDC
                                With Row Split
                                Cooling</a>

                        </div>

                    </div>

                    <div class="text-biru cursor-pointer flex gap-4 relative max-w-max hover-link">
                        <div> Container MDC <div class="inline opacity-0 duration-300 arrow ml-1">->
                            </div>
                        </div>
                        <div
                            class="link invisible duration-300 opacity-0 border-[0.5px] border-black text-black text-sm absolute lg:left-[100%] left-[90%] whitespace-nowrap z-10 bg-white rounded-lg rounded-tl-none overflow-hidden">
                            <a href="{{ route('product.container.10ft') }}"
                                class="py-2 px-4 border-b hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs">10F
                                Container</a>
                            <a href="{{ route('product.container.20ft') }}"
                                class="py-2 px-4 border-b hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs">20F
                                Container</a>
                            <a href="{{ route('product.container.40ft') }}"
                                class="py-2 px-4 border-b hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs">40F
                                Container</a>
                            <a href="{{ route('product.container.dual-container') }}"
                                class="py-2 px-4 hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs">Expandable
                                Container</a>

                        </div>

                    </div>
                </div>
            </div>
            {{-- ampe sini --}}

            <div class="item">
                <div class="mb-5">
                    <a href="{{ route('polymer') }}" class="xl:text-4xl lg:text-4xl sm:text-3xl text-2xl mb-5">LMP
                        Polymer</a>
                </div>

                <div class="sm:text-lg mb-12">At LMP Polymer we deliver solution for Plastic Product Design
                    and Production for wide range Industry</div>

                <div class="flex flex-col lg:gap-6 gap-4">
                    <div class="text-biru cursor-pointer link">Roset <div class="inline opacity-0 duration-300 arrow ml-1">
                            ->
                        </div>
                    </div>
                    <div class="text-biru cursor-pointer link">OTP <div class="inline opacity-0 duration-300 arrow ml-1">
                            ->
                        </div>
                    </div>
                    <div class="text-biru cursor-pointer link">Access Point IDU Hybrid <div
                            class="inline opacity-0 duration-300 arrow ml-1">
                            ->
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="mb-5">
                    <a href="{{ route('nex-t') }}" class="xl:text-4xl lg:text-4xl sm:text-3xl text-2xl mb-5">LMP Nex-T
                        Edge DC 360
                    </a>
                </div>

                <div class="sm:text-lg mb-12">As the first of Data Center Provider that serve Nation Wide of
                    People in Indonesia LMP NDC put his EDGE DC at every Main
                    Island in Indonesia Archipelago. Our EDGE DC are placed as
                    near as possible to user to give high user experience on data
                    processing by cutting the latency & secure.</div>

                <div class="flex flex-col lg:gap-6 gap-4">
                    <div class="text-biru cursor-pointer link">Container MDC <div
                            class="inline opacity-0 duration-300 arrow ml-1">->
                        </div>
                    </div>
                </div>
            </div>

            {{-- baru --}}
            <div class="item relative z-10">
                <div class="mb-5 relative">
                    <a {{-- href="{{ route('') }}" --}}
                        class="relative z-10 xl:text-4xl lg:text-4xl sm:text-3xl text-2xl mb-5">PAC</a>


                </div>

                <div class="sm:text-lg mb-12 relative z-10">Precision Air Conditioning (PAC) is an air cooling system
                    designed to
                    provide very precise temperature control in a room. These systems are
                    typically used in environments where temperature and humidity must be strictly maintained, such as data
                    centers, laboratories, server rooms, or
                    other areas that require stable environmental conditions.</div>

                <div class="flex flex-col lg:gap-6 gap-4">

                    <div class="text-biru cursor-pointer flex gap-4 relative max-w-max hover-link">
                        <div> Air Cool Platform
                            <div class="inline opacity-0 duration-300 arrow ml-1">->
                            </div>
                        </div>
                        <div
                            class="link invisible duration-300 opacity-0 border-[0.5px] border-black text-black text-sm absolute lg:left-[100%] left-[90%] whitespace-nowrap z-10 bg-white rounded-lg rounded-tl-none overflow-hidden">
                            <a {{-- href="{{ route('product.rack.1') }}" --}}
                                class="py-2 px-4 border-b hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs">Rack
                                Cool</a>
                            <a {{-- href="{{ route('product.rack.2') }}" --}}
                                class="py-2 px-4 border-b hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs">Ceiling
                                Cool</a>
                            <a {{-- href="{{ route('product.rack.2.row') }}" --}}
                                class="py-2 px-4 border-b hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs">Wall
                                Cool</a>
                            <a {{-- href="{{ route('product.rack.3') }}" --}}
                                class="py-2 px-4 hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs">Row
                                Cool</a>
                            <div class="cursor-pointer flex gap-4  max-w-max hover-lin">
                                <a {{-- href="{{ route('product.rack.3') }}" --}}
                                    class="py-2 px-4 hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs hover-link">Room
                                    Cool</a>

                            </div>

                        </div>
                        <div
                        class=" linkk invisible duration-300 opacity-0 border-[0.5px] border-black text-black text-sm absolute lg:left-[100%] left-[90%] whitespace-nowrap z-10 bg-white rounded-lg rounded-tl-none overflow-hidden">
                        <a {{-- href="{{ route('product.mdc.top') }}" --}}
                            class="py-2 px-4 border-b hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs">RDX</a>
                        <a {{-- href="{{ route('product.mdc.row') }}" --}}
                            class="py-2 px-4 border-b hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs">Immersion
                            Liquid Cool </a>
                        <a {{-- href="{{ route('product.mdc.rack-split') }}" --}}
                            class="py-2 px-4 border-b hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs">Cold-Plate
                            Liquid Cool</a>
                    </div>

                    </div>


                    <div class="text-biru cursor-pointer flex gap-4 relative max-w-max hover-link">
                        <div> Liquid Cool Platform <div class="inline opacity-0 duration-300 arrow ml-1">->
                            </div>
                        </div>
                        <div
                            class=" link invisible duration-300 opacity-0 border-[0.5px] border-black text-black text-sm absolute lg:left-[100%] left-[90%] whitespace-nowrap z-10 bg-white rounded-lg rounded-tl-none overflow-hidden">
                            <a {{-- href="{{ route('product.mdc.top') }}" --}}
                                class="py-2 px-4 border-b hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs">RDX</a>
                            <a {{-- href="{{ route('product.mdc.row') }}" --}}
                                class="py-2 px-4 border-b hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs">Immersion
                                Liquid Cool </a>
                            <a {{-- href="{{ route('product.mdc.rack-split') }}" --}}
                                class="py-2 px-4 border-b hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs">Cold-Plate
                                Liquid Cool</a>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <style>
            .hover-link:hover .link {
                visibility: visible;
                opacity: 1;
            }
        </style>
         <style>
            .hover-lin:hover .linkk {
                visibility: visible;
                opacity: 1;
            }
        </style>


    </div>

    <div
        class="w-full lg:px-20 flex lg:flex-row flex-col-reverse justify-between items-center sm:mb-36 mb-28 max-lg:pt-14  max-lg:px-12">

        <div class="inter lg:w-1/2 text-center lg:text-left 2xl:mt-0 relative lg:top-10 top-14">

            <div class="max-w-max max-lg:mx-auto lg:mb-10 mb-5 title">
                <div
                    class="2xl:text-4xl xl:text-3xl lg:text-2xl sm:text-xl text-lg  font-bold max-lg:px-10 whitespace-nowrap">
                    Data Center Solution
                </div>

                <div class="h-1 lg:w-[130%] w-full biru sm:my-3 my-2"></div>

                <div class="2xl:text-4xl xl:text-3xl lg:text-2xl sm:text-xl text-lg font-bold max-lg:px-10">
                    Architecture
                </div>

            </div>

            <div class="desc lg:text-xl sm:text-lg lg:mb-3 sm:leading-8 lg:leading-7 mb-5">We present LMP EDGE DC, a
                revolutionary solution
                to enhance efficiency, improve performance, and
                optimize your best Edge data center. With an
                approach that brings data processing closer to its
                source, we deliver remarkable latency reduction for
                maximum results in energy, cooling, and connectivity.
            </div>
            <div class="text lg:text-xl sm:text-lg lg:mb-3 sm:leading-8 lg:leading-7">
            </div>
        </div>


        <div class="flex lg:w-2/5 h-full relative max-lg:left-3 image-1">
            <div class="flex items-center justify-center w-full">
                <div class="absolute z-30 p-10">
                    <div class="bruno xl:text-xl lg:text-2xl sm:text-xl text-lg text-white lg:mb-3 mb-2 text-center px-5">
                        solution
                    </div>
                    <div class="w-full relative sm:h-1 h-0.5 bg-white"></div>
                </div>
                <img class="relative z-20 w-full" src="{{ asset('images/solution/1.jpg') }}" alt="">
            </div>
            <div class="absolute w-full h-full bg-[#E6F6FE] sm:top-8 sm:right-8 top-5 right-5">

            </div>
        </div>
    </div>


    <div class="lg:px-20 sm:px-10 px-5">

        <div
            class="relative xl:text-4xl max-w-max mx-auto lg:text-3xl sm:text-2xl text-xl font-bold text-center lg:mb-24 mb-12 title-2">
            <div class="relative z-10">
                Efficient & Personalized Process
            </div>

            <img class="lg:w-36 w-20 absolute lg:top-[-230%] top-[-100%] lg:left-[-50px] left-[-30px]"
                src="{{ asset('images/dot1.png') }}" alt="">
        </div>

        <div
            class="grid xl:grid-cols-4 lg:grid-cols-2 justify-center lg:gap-8 gap-12 items-center lg:mb-40 lg:mb-20 mb-16">


            @php
                $desc = [
                    'A simple, repeatable system that
                creates efficiency in construction,
                automatic design, and low-risk
                processes.',
                    'Integration of mechanical & electrical
                systems in a factory for optimal
                quality & production speed.',
                    'Good documentation and a dedicated
                engineering team make it easier for
                the factory team to assemble
                modules smoothly',
                    'Performing various types of maintenance
                and service performance enhancements
                to improve efficiency and reduce
                complexity at various locations.',
                ];

                $title = ['Rapid Design', 'Tailored Integration', 'Simplistic Assembly', 'Global Service'];
            @endphp
            @for ($i = 2; $i < 6; $i++)
                <div class="flex flex-col items-center {{ 'solution-' . $i }}">
                    <img class="sm:mb-7 max-sm:scale-75" src="{{ asset('images/solution/' . $i . '.png') }}"
                        alt="">
                    <div class="text-biru lg:text-2xl sm:text-xl text-lg font-bold lg:mb-7 mb-4">{{ $title[$i - 2] }}
                    </div>

                    <div class="font-medium text-center">{{ $desc[$i - 2] }}</div>
                </div>
            @endfor
        </div>

        <div class="xl:text-4xl lg:text-3xl sm:text-2xl text-xl font-bold text-center lg:mb-20 mb-16 title-2">
            Customized for your needs
        </div>
        {{--
        <div class=" lg:gap-16 gap-10 overflow-x-scroll no-scrollbar pb-10 fade sm:flex hidden">
            @for ($i = 0; $i < 4; $i++)
                <div class="lg:min-w-[44%] min-w-[80%]">
                    <div class="font-bold lg:text-2xl text-xl mb-3">
                        {{ $title[$i] }}
                    </div>

                    <div class="mb-3 lg:text-lg font-medium">
                        {{ $title2[$i] }}
                    </div>

                    <div class="lg:text-lg">
                        {{ $desc[$i] }}
                    </div>
                </div>
            @endfor

        </div> --}}

        @php
            $title = ['Edge Data Center', 'Micro Data Center', 'Cable Landing Station', 'Core Data Center'];

            $title2 = ['Customize your edge computing with LMP global solutions', 'LMP micro data centers tailored for your needs', 'Leverage LMP global solutions for customized cable landing stations', 'Build flexible, scalable and efficient core data centers with LMP'];
            $desc = [
                'LMP Global Solutions revolutionizes the edge with cutting-edge, tailored data centers that supercharge deployment, reduce risks, and optimize expenses. Deploy an array of custom modular edge data centers, ranging from dozens to hundreds, to amplify flexibility, enhance scalability, and elevate efficiency.',
                'LMP Global Solutions revolutionizes data centers, harmonizing power, cooling, monitoring, and racks to match your unique business demands. Our expert team partners with you, guiding from inception to implementation, freeing you to prioritize your core mission. Our micro data centers offer an innovative approach to flexibly deploy capacity anywhere.',
                '
LMP Global Solutions boasts an unparalleled global presence in crafting modular
data centers, spanning the globe with successful cable landing station setups on
six continents. We specialize in providing tailor-made, pre-validated, and factory-
integrated cable landing station solutions that seamlessly blend value and rapid
delivery. Our swift data center component deployments enable streamlined on-site assembly, requiring fewer personnel, no matter where you are in the world.
',
                'LMP Global Solutions streamlines core data center expansion effortlessly. Our innovative modular approach empowers clients, contractors, and consulting allies to seamlessly
plan and construct data centers worldwide. We provide adaptable, scalable, and eco-efficient solutions that are pre-engineered, prefabricated, and rigorously pre-tested, ensuring swift on-site deployment and assembly. Our dedicated solutions team collaborates with IT, facilities, network, and security stakeholders, guiding you from inception to project completion.',
            ];
        @endphp

        <!--SLIDER DESKTOP-->
        <section id="splide" class="splide max-md:hidden mb-36">
            <div class="splide__track">
                <ul class="splide__list">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="splide__slide px-14">
                            <div class="font-bold lg:text-2xl text-xl mb-3">
                                {{ $title[$i] }}
                            </div>

                            <div class="mb-3 lg:text-lg font-medium">
                                {{ $title2[$i] }}
                            </div>

                            <div class="lg:text-lg">
                                {{ $desc[$i] }}
                            </div>
                        </div>
                    @endfor
                </ul>
            </div>
        </section>

        <!--SLIDER MOBILE-->
        <section id="splide2" class="splide md:hidden mb-16">
            <div class="splide__track">
                <ul class="splide__list">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="splide__slide px-5">
                            <div class="font-bold text-lg mb-3">
                                {{ $title[$i] }}
                            </div>

                            <div class="mb-3 lg:text-lg font-medium">
                                {{ $title2[$i] }}
                            </div>

                            <div class="lg:text-lg">
                                {{ $desc[$i] }}
                            </div>
                        </div>
                    @endfor
                </ul>
            </div>
        </section>
        <style>
            .marquee div {
                animation: marquee 5s linear infinite;
            }

            .marquee span {
                float: left;
                width: 50%;
            }

            @keyframes marquee {
                0% {
                    left: 0;
                }

                100% {
                    left: -100%;
                }
            }

            .splide__pagination {
                bottom: -30px !important;
            }


            [type=reset],
            [type=submit],


            .splide__arrow svg {
                fill: white !important;
            }
        </style>

    </div>

    <script>
        ScrollReveal().reveal('.title', {
            delay: 200,
            duration: 1000,
            distance: '100px',
            origin: 'bottom'
        });

        ScrollReveal().reveal('.desc', {
            delay: 350,
            duration: 1000,
            distance: '100px',
            origin: 'bottom'
        });


        ScrollReveal().reveal('.item', {
            delay: 500,
            duration: 1000,
            distance: '100px',
            origin: 'left'
        });
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

        ScrollReveal().reveal('.title-2', {
            delay: 350,
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
        for (let i = 1; i < 6; i++) {
            ScrollReveal().reveal('.solution-' + i, {
                delay: 700 + i * 100,
                duration: 1000,
                distance: '100px',
                origin: 'bottom'
            });
        }
    </script>

    <style>
        .link:hover .arrow {
            opacity: 100%;
        }
    </style>
@endsection
