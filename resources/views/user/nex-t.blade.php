@extends('layouts.frontend')

@section('content')
    <div class="lg:py-24 py-12 px-20 max-lg:px-7">
        <div class="flex lg:flex-col flex-col-reverse justify-center  ">
            <div class="max-w-max max-lg:mx-auto max-lg:text-center lg:mb-32 sm:mb-20 mb-12">
                <div
                    class="title 2xl:text-4xl lg:text-3xl sm:text-2xl text-xl font-bold max-lg:px-10 whitespace-nowrap self-start">
                    LMP Nex-T
                    Edge DC 360</div>

                <div class="title h-1 lg:w-[100%] w-full biru sm:my-3 my-2 max-lg:mb-5"></div>


                <div class="desc xl:text-2xl lg:text-xl sm:text-lg">Advancing Technologies And Emissions Reduction
                </div>
            </div>
            <img class="mb-7 self-center image" src="{{ asset('images/nex-t.png') }}" alt="">
        </div>

        <div class="flex flex-col lg:items-center">
            <div class="desc-2 text-2xl font-semibold mb-5 w-4/5 max-lg:hidden">
                LMP Nex-T Edge DC 360
            </div>

            <div class="desc-2 mb-7 lg:w-4/5 xl:text-xl lg:text-lg">Are Design & Build to dedicated to serve millions of
                people and
                thousands of
                businesses
                along Indonesia Archipelago who seek reliability, security, stability and availability for their
                critical systems every second. As the first of Data Center Provider that serve Nation Wide
                of People in Indonesia LMP NDC put his EDGE DC at every Main Island in Indonesia Archipelago.
                Our EDGE DC are placed as near as possible to user to give high user experience on data
                processing by cutting the latency.</div>

            <div class="desc-2 mb-12 lg:w-4/5 xl:text-xl lg:text-lgz">Additionally, LMP Nex-t Edge DC 360 has been advancing
                cooling
                management
                systems
                that caled Dynamix Cooling System “DCS” to achieve efficiencies power consumption by
                using cutting edge computing technology to predict cooling supply base on IT Equipment
                “ITE” productivity or we call : Cooling as a Services “CaaS”.</div>
        </div>

        <div class="fade w-full flex text-biru justify-end lg:text-xl sm:text-lg cursor-pointer">
            <a href="{{route('service')}}" class="cursor-pointer">PRODUCT -></a>
        </div>
    </div>

    <script>
        ScrollReveal().reveal('.image', {
            delay: 350,
            duration: 1000,
            distance: '100px',
            opacity: 0,
            origin: 'bottom',
        });

        ScrollReveal().reveal('.title', {
            delay: 700,
            duration: 1000,
            distance: '100px',
            origin: 'bottom'
        });

        ScrollReveal().reveal('.desc', {
            delay: 800,
            duration: 1000,
            distance: '100px',
            origin: 'bottom'
        });

        ScrollReveal().reveal('.desc-2', {
            delay: 800,
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
    </script>
@endsection
