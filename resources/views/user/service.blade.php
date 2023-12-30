@extends('layouts.frontend')


@section('content')
    <div class="lg:px-20 sm:px-10 px-5 lg:py-36 sm:py-20 py-12">

        <div class="inter lg:mb-28 mb-14 lg:w-1/2 text-center lg:text-left">

            <div class="max-w-max max-lg:mx-auto title">
                <div class="2xl:text-4xl xl:text-3xl sm:text-2xl text-xl font-bold max-lg:px-10">Product & Service</div>

                <div class="h-1 lg:w-[130%] w-full biru lg:my-5 my-3"></div>
            </div>

            <div class="desc lg:text-xl sm:text-lg">LMP offers essential infrastructure technology and
                specialized solutions that can be swiftly implemented
                to meet your business needs
            </div>
        </div>
        <div class="grid lg:grid-cols-2 lg:gap-36 gap-20">
            <div class="item">
                <div class="xl:text-5xl lg:text-4xl sm:text-3xl text-2xl mb-5">LMP Networks</div>

                <div class="lg:text-lg mb-12">LMP Networks provide Ultra High Density Solution
                    for connectivity in Data Center. Optimizing Space - Air flow
                    and Efficiency in Cooling Systems & Energy consumption</div>

                <div class="flex flex-col lg:gap-6 gap-4">
                    <div class="text-biru cursor-pointer link">Cable Fiber Optic <div
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
                <div class="xl:text-5xl lg:text-4xl sm:text-3xl text-2xl mb-5">LMP Renewable Energy</div>

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

            <div class="item">
                <div class="xl:text-5xl lg:text-4xl sm:text-3xl text-2xl mb-5">LMP Centrinium</div>

                <div class="sm:text-lg mb-12">LMP Centrinium provide wide range product solution
                    for Physical EDGE Data Center. from Cabinet Data
                    Center to Container Data Center, include Cooling System,
                    Electrical Panel, Power House, Energy Storage, Fire
                    Suppression Systems, Monitoring Systems and DCIM.</div>

                <div class="flex flex-col lg:gap-6 gap-4">
                    <a href="{{ route('product.centrinium.centrinium-containment') }}"
                        class="text-biru cursor-pointer link">Centrinium <div
                            class="inline opacity-0 duration-300 arrow ml-1">
                            ->
                        </div>
                    </a>
                    <a href="{{ route('product.mdc.top') }}" class="text-biru cursor-pointer link">Rack MDC <div
                            class="inline opacity-0 duration-300 arrow ml-1">->
                        </div></a>
                    <a href="{{ route('product.rack.1') }}" class="text-biru cursor-pointer link">Outdoor MDC <div
                            class="inline opacity-0 duration-300 arrow ml-1">->
                        </div></a>
                    <a href="{{ route('product.mdc.row') }}" class="text-biru cursor-pointer link">Row MDC <div
                            class="inline opacity-0 duration-300 arrow ml-1">->
                        </div></a>
                    <a href="{{ route('product.container.10ft') }}" class="text-biru cursor-pointer link">Container MDC <div
                            class="inline opacity-0 duration-300 arrow ml-1">->
                        </div></a>
                </div>
            </div>

            <div class="item">
                <div class="xl:text-5xl lg:text-4xl sm:text-3xl text-2xl mb-5">LMP Polymer</div>

                <div class="sm:text-lg mb-12">At LMP Polymer we deliver solution for Plastic Product Design
                    and Production for wide range Industry</div>

                <div class="flex flex-col lg:gap-6 gap-4">
                    <div class="text-biru cursor-pointer link">Reset <div class="inline opacity-0 duration-300 arrow ml-1">
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
                <div class="xl:text-5xl lg:text-4xl sm:text-3xl text-2xl mb-5">LMP Services & Learning Center</div>

                <div class="sm:text-lg mb-12">Whether it's engineering, on-site project management,
                    energy-consumption monitoring, or something else,
                    LMP offers a wide range of programs and services to
                    support critical infrastructure needs</div>

                <div class="flex flex-col lg:gap-6 gap-4">
                    <div class="text-biru cursor-pointer link">Project Service <div
                            class="inline opacity-0 duration-300 arrow ml-1">->
                        </div>
                    </div>
                    <div class="text-biru cursor-pointer link">UPS & Baterry Service <div
                            class="inline opacity-0 duration-300 arrow ml-1">->
                        </div>
                    </div>
                    <div class="text-biru cursor-pointer link">Thermal Service <div
                            class="inline opacity-0 duration-300 arrow ml-1">->
                        </div>
                    </div>
                    <div class="text-biru cursor-pointer link">Rack PDU Service <div
                            class="inline opacity-0 duration-300 arrow ml-1">->
                        </div>
                    </div>
                    <div class="text-biru cursor-pointer link">DC Power Service <div
                            class="inline opacity-0 duration-300 arrow ml-1">->
                        </div>
                    </div>
                    <div class="text-biru cursor-pointer link">Electrical Reliability Service <div
                            class="inline opacity-0 duration-300 arrow ml-1">->
                        </div>
                    </div>
                    <div class="text-biru cursor-pointer link">Electrical Safety & Compliance <div
                            class="inline opacity-0 duration-300 arrow ml-1">->
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="xl:text-5xl lg:text-4xl sm:text-3xl text-2xl mb-5">LMP Nex-T Edge DC 360</div>

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
        </div>


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
    </script>

    <style>
        .link:hover .arrow {
            opacity: 100%;
        }
    </style>
@endsection
