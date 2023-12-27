@extends('layouts.frontend')


@section('content')
    <x-top-setion2 title="Data Center Solution" subTitle="Architecture" theme="solution" image="solution/1"
        desc="We present LMP EDGE DC, a revolutionary solution
        to enhance efficiency, improve performance, and
        optimize your best Edge data center. With an
        approach that brings data processing closer to its
        source, we deliver remarkable latency reduction for
        maximum results in energy, cooling, and connectivity." />


    <div class="lg:px-20 sm:px-10 px-5">

        <div class="xl:text-4xl lg:text-3xl sm:text-2xl text-xl font-bold text-center lg:mb-24 mb-12 title-2">
            Efficient & Personalized Process
        </div>

        <div class="grid xl:grid-cols-4 lg:grid-cols-2 justify-center lg:gap-8 gap-12 items-center lg:mb-40 lg:mb-20 mb-16">


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
                    <img class="sm:mb-7 max-sm:scale-75" src="{{ asset('images/solution/' . $i . '.png') }}" alt="">
                    <div class="text-biru lg:text-2xl sm:text-xl text-lg font-bold lg:mb-7 mb-4">{{ $title[$i - 2] }}</div>

                    <div class="font-semibold text-center">{{ $desc[$i - 2] }}</div>
                </div>
            @endfor
        </div>

        <div class="xl:text-4xl lg:text-3xl sm:text-2xl text-xl font-bold text-center lg:mb-20 mb-16 title-2">
            Customized for your needs
        </div>

        <div class="flex gap-16 overflow-x-scroll no-scrollbar pb-10 fade">
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
                <div class="lg:min-w-[44%] min-w-[100%]">
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


        </div>

        <div class="flex justify-end text-xl pb-14 fade">
            <div class="cursor-pointer">Slide -></div>
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
@endsection
