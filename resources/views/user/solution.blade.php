@extends('layouts.frontend')


@section('content')
    <div class="w-full flex justify-between items-center mb-48">

        <div class="inter px-20 mt-20  w-1/2">
            <div class="text-4xl font-bold">LMP Support</div>

            <div class="h-1 w-1/2 biru my-3"></div>


            <div class="text-xl mb-3">Locate your specific product for the latest user manuals,
                system application guides, data sheets, warranties,
                software downloads and more.
            </div>

            <div class="text-xl">
                We continue to reinvest approximately 10-15 percent of our
                revenues into R&D, providing our scientists - expert & engineers
                with the resources they need to be successful.
            </div>
        </div>
        {{-- <div class="relative w-3/5">
            <img class="relative z-20 w-full" src="{{ asset('images/research/1.jpg') }}" alt="">
            <div class="absolute w-full h-full bg-[#E6F6FE] top-8 right-8">

            </div>
        </div> --}}

        <div class="flex relative w-2/5 h-full">
            <div class="flex items-center justify-center w-full">
                <img class="relative z-20 w-full" src="{{ asset('images/solution/1.jpg') }}" alt="">
            </div>
            <div class="absolute w-full h-full bg-[#E6F6FE] top-8 right-8">

            </div>
        </div>
    </div>


    <div class="px-20">

        <div class="text-4xl font-bold text-center mb-24">
            Efficient & Personalized Process
        </div>

        <div class="flex justify-between gap-8 items-center mb-40">


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
                <div class="flex flex-col items-center">
                    <img class="mb-7" src="{{ asset('images/solution/' . $i . '.png') }}" alt="">
                    <div class="text-biru text-2xl font-bold mb-7">{{ $title[$i - 2] }}</div>

                    <div class="font-semibold text-center">{{ $desc[$i - 2] }}</div>
                </div>
            @endfor
        </div>

        <div class="text-4xl font-bold text-center mb-20">
            Customized for your needs
        </div>

        <div class="flex gap-20 overflow-x-scroll no-scrollbar mb-14">
            @php
                $title = ['Edge Data Center', 'Micro Data Center', 'Cable Landing Station'];

                $title2 = ['Customize your edge computing with LMP global solutions', 'LMP micro data centers tailored for your needs', 'Leverage LMP global solutions for customized cable landing stations'];
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
                ];
            @endphp
            @for ($i = 0; $i < 3; $i++)
                <div class="min-w-[44%]">
                    <div class="font-bold text-2xl mb-2">
                        {{ $title[$i] }}
                    </div>

                    <div class="mb-3 text-lg font-medium">
                        {{ $title2[$i] }}
                    </div>

                    <div class="text-lg">
                        {{ $desc[$i] }}
                    </div>
                </div>
            @endfor


        </div>

        <div class="flex justify-end cursor-pointer mb-16">
            <div class="text-lg font-medium cursor-pointer">Slide -></div>
        </div>

    </div>
@endsection
