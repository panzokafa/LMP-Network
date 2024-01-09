@extends('layouts.frontend')


@section('content')
    <div class="slider absolute">
        {{-- slide ultra high --}}
        <div class="relative overflow-hidden">
            <img class="banner object-cover lg:h-[65vh] sm:h-[40vh] h-[35vh]  w-full" src="{{ asset('images/banner/1.jpg') }}"
                alt="">

            <div
                class="header tracking-wider lg:text-4xl md:text-3xl sm:text-2xl text-lg lg:leading-normal md:leading-normal leading-normal w-1/2 2xl:w-2/5 xl:w-2/5 xl:pr-5 poppins  bruno text-white absolute  sm:top-[35%] top-[30%] left-6 md:left-10 lg:left-20">
                Ultra High
                Density
                Edge Data Center <span class="text-hijau  bruno">For
                    Greener Data Center</span></div>

            <a href="{{ route('service') }}"
                class="product inter sm:text-xl text-sm absolute lg:right-24 md:right-14 right-8 md:bottom-16 font-light bottom-8 text-white cursor-pointer">
                PRODUCT <span class="text-biru font-medium md:text-2xl sm:tetx-xl text-lg">-></span>
            </a>
        </div>

        <!--Slide Containment-->
        <div class="relative overflow-hidden">
            <img class=" object-cover lg:h-[65vh] sm:h-[40vh] h-[35vh]  w-full" src="{{ asset('images/banner/4.jpg') }}"
                alt="">
            <div class="absolute  sm:top-[40%] top-[30%] left-6 md:left-10 lg:left-20">
                <div
                    class=" lg:mb-8 mb-5 pr-5 tracking-wider lg:text-4xl md:text-3xl sm:text-2xl text-lg lg:leading-normal md:leading-normal leading-normal xl:pr-5  bruno text-white">
                    Centrinium Containment</div>

                <a href="{{ route('centrinium') }}"
                    class="font-medium hover:bg-white relativez-20 hover:text-black duration-300 lg:p-3 p-2 border rounded-lg text-white max-w-max poppins tracking-widest lg:text-base sm:text-sm text-xs">Check
                    Here <i class="fa-solid fa-arrow-right"></i></a>
            </div>



        </div>

    <!--Slide Research-->
    <div class="relative overflow-hidden">
        <img class=" object-cover object-left lg:h-[65vh] sm:h-[40vh] h-[35vh] relative w-full"
            src="{{ asset('images/banner/3.jpg') }}" alt="">
        <div class="absolute  sm:top-[40%] top-[30%] left-6 md:left-10 lg:left-20">
            <div
                class=" lg:mb-8 mb-5 pr-5 tracking-wider lg:text-4xl md:text-3xl sm:text-2xl text-lg lg:leading-normal md:leading-normal leading-normal xl:pr-5  bruno text-white">
                Research & Developent</div>

            <a href="{{ route('research') }}"
                class="font-medium hover:bg-white relativez-20 hover:text-black duration-300 lg:p-3 p-2 border rounded-lg text-white max-w-max poppins tracking-widest lg:text-base sm:text-sm text-xs">Check
                Here <i class="fa-solid fa-arrow-right"></i></a>
        </div>



    </div>




    <!--Slide MDC-->
    <div class="relative overflow-hidden">
        <img class=" object-cover object-left lg:h-[65vh] sm:h-[40vh] h-[35vh] relative w-full"
            src="{{ asset('images/banner/mdcrow.jpg') }}" alt="">
        <div class="absolute  sm:top-[40%] top-[30%] left-6 md:left-10 lg:left-20">
            <div
                class=" lg:mb-8 mb-5 pr-5 tracking-wider lg:text-4xl md:text-3xl sm:text-2xl text-lg lg:leading-normal md:leading-normal leading-normal xl:pr-5  bruno text-white">
                MDC ROW</div>
        </div>



    </div>

    <!--Slide Centrinium-->
    <div class="relative overflow-hidden">
        <img class=" object-cover object-left lg:h-[65vh] sm:h-[40vh] h-[35vh] relative w-full"
            src="{{ asset('images/banner/centrinium.jpg') }}" alt="">
        <div class="absolute  sm:top-[40%] top-[30%] left-6 md:left-10 lg:left-20">
            <div
                class=" lg:mb-8 mb-5 pr-5 tracking-wider lg:text-4xl md:text-3xl sm:text-2xl text-lg lg:leading-normal md:leading-normal leading-normal xl:pr-5  bruno text-white">
                Centrinium OTB UHD</div>
        </div>



    </div>

    <!--Slide Container-->
    <div class="relative overflow-hidden">
        <img class=" object-cover object-left lg:h-[65vh] sm:h-[40vh] h-[35vh] relative w-full"
            src="{{ asset('images/banner/container.jpg') }}" alt="">
        <div class="absolute  sm:top-[40%] top-[30%] left-6 md:left-10 lg:left-20">
            <div
                class=" lg:mb-8 mb-5 pr-5 tracking-wider lg:text-4xl md:text-3xl sm:text-2xl text-lg lg:leading-normal md:leading-normal leading-normal xl:pr-5  bruno text-white">
                AIO Container Data Center</div>
        </div>



    </div>

    <!--Slide Training-->
    <div class="relative overflow-hidden">
        <img class="banner object-cover lg:h-[65vh] sm:h-[40vh] h-[35vh]  w-full" src="{{ asset('images/banner/2.jpg') }}"
            alt="">
        <div class="absolute  sm:top-[40%] top-[30%] left-6 md:left-10 lg:left-20">
            <div
                class="lg:mb-8 mb-5 tracking-wider lg:text-4xl md:text-3xl sm:text-2xl text-lg lg:leading-normal md:leading-normal leading-normal xl:pr-5  bruno text-white">
                Service &<br>Learning Center
            </div>

            <a href="{{ route('solution') }}"
                class="font-medium hover:bg-white relativez-20 hover:text-black duration-300 lg:p-3 p-2 border rounded-lg text-white max-w-max poppins tracking-widest lg:text-base sm:text-sm text-xs">Check
                Here <i class="fa-solid fa-arrow-right"></i></a>
        </div>



    </div>

    <!--Slide Corporate-->
    <div class="relative overflow-hidden">
        <img class=" object-cover object-left lg:h-[65vh] sm:h-[40vh] h-[35vh] relative w-full"
            src="{{ asset('images/banner/corporate.jpg') }}" alt="">
        <div class="absolute  sm:top-[40%] top-[30%] left-6 md:left-10 lg:left-20">
            <div
                class=" lg:mb-8 mb-5 pr-5 tracking-wider lg:text-4xl md:text-3xl sm:text-2xl text-lg lg:leading-normal md:leading-normal leading-normal xl:pr-5  bruno text-white">
                Corporate Social Responsibility</div>
        </div>



    </div>
</div>




    <!--section 1-->
    <div class="lg:px-20 md:px-10 px-5">
        <div class="lg:mb-36 ">
            <div class="flex lg:flex-row flex-col-reverse justify-between items-center lg:pt-28 py-14">
                <div class="lg:w-4/5 relative">
                    <img class=" w-[140px] h-auto absolute top-[-80px] left-[-40px]" src="{{ asset('images/dot1.png') }}"
                        alt="">
                    <div
                        class="title text-hijau lg:text-4xl sm:text-3xl max-lg:text-center text-2xl md:mb-12 mb-5 bruno relative z-10">
                        GREEN
                    </div>
                    <div
                        class="desc xl:leading-relaxed md:leading-8 leading-6  xl:text-3xl lg:text-2xl sm:text-lg tracking-wide inter relative z-10 lg:font-normal font-medium md:w-2/3 max-lg:mx-auto max-lg:text-center max-lg:px-10">
                        Environmentally friendly technology
                        plays a crucial role in preserving the
                        sustainability of our planet
                    </div>
                </div>

                <div class="flex justify-end relative sm:w-2/5 w-3/5 h-full max-lg:mb-6 image-1">
                    <div
                        class="xl:w-96 lg:w-3/4 w-full  border-2 border-[#3F73AE] absolute right-10  max-lg:right-[-20px] max-lg:top-[-20px] max-md:right-[-8px] max-md:top-[-8px] h-full rounded">
                    </div>
                    <img class="xl:w-96 lg:w-3/4  relative lg:top-8 lg:right-24 top-0 right-0 left-0"
                        src="{{ asset('images/2.jpg') }}" alt="">
                </div>
            </div>
        </div>

        <!--section 2-->
        <div class="lg:mb-48 relative z-10">
            <div class="flex lg:flex-row flex-col items-center lg:justify-between justify-center  relative ">
                <div class="image-2 flex relative lg:w-1/3 w-4/5 h-full max-lg:mb-10">
                    <img class="w-full relative z-10 lg:bottom-8 md:bottom-5 bottom-2" src="{{ asset('images/1.jpg') }}"
                        alt="">
                    <div
                        class="w-full h-full border-2 border-[#3F73AE] absolute lg:left-8 md:left-5 left-2  h-full rounded">
                    </div>
                </div>

                <div class=" relative lg:w-7/12  w-full max-lg:text-center lg:px-11">
                    <div
                        class="title xl:text-3xl lg:text-2xl sm:text-lg tracking-wide inter lg:font-normal font-medium xl:leading-10 sm:leading-8 mb-5">
                        This technology paves the way to a cleaner and greener world, as much as we can live a modern
                        lifestyle without distractions the earth where we live.
                    </div>
                    <a href="{{ route('user.about') }}"
                        class="desc hover:scale-110 max-lg:hidden text-biru hover font-normal text-xl relative max-lg:top-[-70px] cursor-pointer max-w-max">
                        WHY LMP ->
                    </a>
                </div>
            </div>
        </div>

        <a href="{{ route('user.about') }}"
            class="title lg:hidden items-center flex justify-center text-center text-biru font-medium text-lg relative cursor-pointer max-w-max mx-auto mb-24">
            WHY LMP
        </a>




        <!--banner biru--->
        <div class="relative flex justify-center mb-32 max-w-fit m-auto ">
            <img class="absolute w-36 h-auto left-[-50px] bottom-16" src="{{ asset('images/dot1.png') }}"
                alt="">
            <div
                class="box relative z-10 biru-muda flex-col flex md:gap-5 gap-2 md:py-7 py-4 lg:px-24 md:px-8 px-3 text-center max-w-max rounded">
                <div class="inter font-bold xl:text-3xl lg:text-2xl sm:text-md text-lg">Your business needs a competitive
                    advantage
                </div>
                <div class="inter lg:text-xl md:text-lg text-sm">Stay fast and connected by implementing digital services
                    that are
                    closest to the
                    cloud
                    and <br> network density to grow your business and achieve success.</div>
            </div>
            <img class="box absolute z-10 lg:right-[-50px] right-[-20px] lg:w-[110px] w-20 bottom-[-25px]"
                src="{{ asset('images/leaf.png') }}" alt="">
        </div>

        <!--turbine section--->

        <div class="mb-36">
            <div class="flex lg:flex-row flex-col-reverse justify-between items-center">
                <div class="lg:w-4/5 relative ">
                    <div
                        class="title xl:text-3xl lg:text-xl sm:text-lg lg:tracking-widest tracking-wider inter relative z-10 lg:font-light lg:w-4/5 xl:leading-relaxed lg:leading-10 lg:mb-5 mb-8 max-lg:text-center">
                        Renewable energy sources are emerging as bright stars in the shift towards a clean and sustainable
                        future.
                    </div>
                    <div class="desc">
                        <a href="{{ route('energy') }}"
                            class="flex gap-2 items-center hover:gap-6 max-w-max duration-300 cursor-pointer xl:text-xl lg:text-lg max-lg:text-center text-biru font-medium max-lg:mx-auto">
                            <div>Check Here</div>
                            <div>
                                ->
                            </div>
                        </a>
                    </div>
                </div>

                <div class="flex lg:justify-end justify-center relative lg:w-3/4 h-full max-lg:bottom-12 max-lg:left-5">
                    <div
                        class="image-1 lg:w-full w-11/12  bg-[#E6F6FE] absolute lg:left-1 lg:bottom-1 sm:right-8 right-5 h-full rounded z-10">
                    </div>
                    <img class="image-1  lg:w-full w-11/12 relative top-5 right-5 z-20"
                        src="{{ asset('images/turbine.jpg') }}" alt="">
                    <img class="w-[140px] bottom-[-80px] left-[-80px] absolute" src="{{ asset('images/dot1.png') }}"
                        alt="">
                </div>
            </div>
        </div>

        <!--panel section--->

        <div class="mb-36">
            <div class="flex lg:flex-row-reverse flex-col-reverse lg:justify-between justify-center items-center xl:pr-20">
                <div class="lg:w-1/3 relative">
                    <div
                        class="block title xl:text-3xl lg:text-xl sm:text-lg lg:tracking-widest tracking-wider inter relative z-10 lg:font-light lg:w-full xl:leading-relaxed lg:leading-10 lg:mb-5 mb-8 max-lg:text-center">
                        Great solution to your interesting request
                    </div>

                    <div class="desc">
                        <a href="{{ route('solution') }}"
                            class="flex gap-2 items-center hover:gap-6 max-w-max duration-300 cursor-pointer xl:text-xl lg:text-lg max-lg:text-center text-biru font-medium max-lg:mx-auto">
                            <div>Check Here</div>
                            <div>
                                ->
                            </div>
                        </a>
                    </div>
                </div>

                <div class="flex lg:justify-end justify-center relative lg:w-7/12 h-full max-lg:top-[-45px]">
                    <div
                        class="image-2 lg:w-full w-11/12  bg-[#E6F6FE] absolute lg:left-7 lg:top-10 md:left-14 left-7 h-full rounded z-10">
                    </div>
                    <img class="image-2 lg:w-full w-11/12 relative lg:bottom-5 md:top-5 top-3 z-20"
                        src="{{ asset('images/panel.jpg') }}" alt="">
                    <img class="w-[140px] md:bottom-[-40px] md:right-[-80px] lg:bottom-[-90px] bottom-[-80px] right-[-80px] absolute"
                        src="{{ asset('images/dot1.png') }}" alt="">
                </div>
            </div>
        </div>

        <!--machine section--->

        <div class=" lg:my-60 mb-36 inter">
            <div class="flex lg:justify-between lg:flex-row flex-col-reverse items-center ">
                <div class="lg:w-2/5 w-full relative max-lg:top-20">
                    <div class="title text-center text-biru lg:text-3xl sm:text-2xl text-2xl lg:mb-24 mb-16">
                        LMP Group <span class="text-black">In Numbers</span>
                    </div>

                    <div class="grid md:grid-cols-2 gap-x-24 lg:gap-y-36 gap-y-16 max-lg:px-10">
                        <div class="desc-2">
                            <div class="md:text-3xl text-xl md:mb-8 mb-4">
                                48
                            </div>
                            <div class="h-1 w-full bg-[#A0A0A0] mb-5 overflow-hidden">
                                <div class="h-1 bg-[#2D5290] progress-1" style="width: 7%"></div>
                            </div>

                            <div class="sm:text-lg text-[#797979]">
                                EMPLOYEES
                            </div>
                        </div>

                        <div class="desc-2">
                            <div class="md:text-3xl text-xl md:mb-8 mb-4">
                                45%
                            </div>
                            <div class="h-1 w-full bg-[#A0A0A0] mb-5 overflow-hidden">
                                <div class="h-1 bg-[#2D5290] progress-1" style="width: 45%"></div>
                            </div>
                            <div class="sm:text-lg text-[#797979]">
                                TKDN
                            </div>
                        </div>

                        <div class="desc">
                            <div class="md:text-3xl text-xl md:mb-8 mb-4">
                                $413M
                            </div>
                            <div class="h-1 w-full bg-[#A0A0A0] mb-5 overflow-hidden">
                                <div class="h-1 bg-[#2D5290] progress-2" style="width: 30%"></div>
                            </div>
                            <div class="sm:text-lg text-[#797979]">
                                CAPITAL
                            </div>
                        </div>

                        <div class="desc">
                            <div class="md:text-3xl text-xl md:mb-8 mb-4">
                                100
                            </div>
                            <div class="h-1 w-full bg-[#A0A0A0] mb-5 overflow-hidden">
                                <div class="h-1 bg-[#2D5290] progress-2" style="width: 80%"></div>
                            </div>
                            <div class="sm:text-lg text-[#797979]">
                                CLIENTS
                            </div>
                        </div>
                    </div>
                </div>

                <div class="image-1 flex justify-end relative lg:w-1/2 w-10/12 h-full max-md:left-2">

                    <div class="w-full bg-[#E6F6FE] absolute lg:right-10 lg:top-10 right-6 top-6 h-full rounded z-20">
                    </div>
                    <img class="w-full relative z-20" src="{{ asset('images/machine.jpg') }}" alt="">
                    <img class="w-[140px] md:bottom-[-40px] md:right-[-20px] lg:bottom-[-250px] bottom-[-80px] right-[-80px] absolute"
                        src="{{ asset('images/dot1.png') }}" alt="">
                </div>

            </div>
        </div>

        <div class="flex flex-col items-center justify-center mt-24">
            <div class="title-2 inter font-bold mb-5 inter font-bold md:text-4xl text-2xl">Clients</div>
            <div class="desc-2 inter md:mb-12 mb-8 md:text-xl text-center">​We are proud and committed to helping our
                customers
                every step
                of
                the way and
                providing
                benefits solutions to meet all their needs.</div>

            <div
                class="lg:grid lg:grid-cols-5 max-lg:flex flex-wrap xl:gap-x-32 gap-x-20 items-center justify-center  gap-y-16 md:mb-24 mb-10 2xl:px-44">
                <img src="{{ null }}" class="logo-1 md:w-32 w-28 h-auto max-lg:hidden">
                <img src="{{ asset('images/sponsor/keuangan.png') }}" class="logo-1 md:w-32 w-28 h-auto">
                <img src="{{ asset('images/sponsor/kementrian.png') }}" class="logo-2 md:w-32 w-28 h-auto">
                <img src="{{ asset('images/sponsor/kominfo.png') }}" class="logo-3 md:w-32 w-28 h-auto">
                <img src="{{ null }}" class="logo-1 md:w-32 w-28 h-auto max-lg:hidden">
                <img src="{{ asset('images/sponsor/psn.png') }}" class="logo-4 md:w-32 w-28 h-auto">
                <img src="{{ asset('images/sponsor/mandiri.png') }}" class="logo-4 md:w-32 w-28 h-auto">
                <img src="{{ asset('images/sponsor/telkomsel.png') }}" class="logo-6 md:w-32 w-28 h-auto">
                <img src="{{ asset('images/sponsor/telkomsigma.png') }}" class="logo-7 md:w-32 w-28 h-auto">
                <img src="{{ asset('images/sponsor/telkomakses.png') }}" class="logo-8 md:w-32 w-28 h-auto">
                <img src="{{ asset('images/sponsor/tcm.png') }}" class="logo-8 md:w-32 w-28 h-auto">
                <img src="{{ asset('images/sponsor/indosat.png') }}" class="logo-9 md:w-32 w-28 h-auto">
                <img src="{{ asset('images/sponsor/jasamarga.png') }}" class="logo-10 md:w-32 w-28 h-auto">
                <img src="{{ asset('images/sponsor/peruri.png') }}" class="logo-11 md:w-32 w-28 h-auto">
                <img src="{{ asset('images/sponsor/snl.png') }}" class="logo-12 md:w-32 w-28 h-auto">
                <img src="{{ null }}" class="logo-1 md:w-32 w-28 h-auto max-lg:hidden">
                <img src="{{ asset('images/sponsor/pegadaian.png') }}" class="logo-13 md:w-32 w-28 h-auto">
                <img src="{{ asset('images/sponsor/freeport.png') }}" class="logo-14 md:w-32 w-28 h-auto">
                <img src="{{ asset('images/sponsor/bukopin.png') }}" class="logo-15 md:w-32 w-28 h-auto">
                <img src="{{ null }}" class="logo-1 md:w-32 w-28 h-auto max-lg:hidden">

            </div>
            <div class="inter font-semibold md:text-2xl text-lg pb-24">and many more... </div>
        </div>
    </div>
    <style>
        .bx-wrapper .bx-controls-direction a {
            z-index: 0 !important;
        }

        .bx-wrapper .bx-pager {
            bottom: 15px !important;
        }

        .bx-wrapper .bx-pager.bx-default-pager a:hover,
        .bx-wrapper .bx-pager.bx-default-pager a.active,
        .bx-wrapper .bx-pager.bx-default-pager a:focus {
            background: white;

        }

        .bx-wrapper .bx-pager.bx-default-pager a {
            background: none;
            border: 1px white solid
        }

        .bx-wrapper {
            margin-bottom: 0px !important;
        }

        .bx-wrapper {
            border: 0 solid #fff !important;
        }
    </style>


    <script>
        ScrollReveal().reveal('.header', {
            delay: 350,
            duration: 1000,
            distance: '50px',
        });

        ScrollReveal().reveal('.banner', {
            scale: 1.2,
            opacity: 1,
            duration: 5000,

        });

        ScrollReveal().reveal('.product', {
            delay: 00,
            duration: 1000,
            distance: '100px',
            origin: 'right'
        });

        ScrollReveal().reveal('.image-1', {
            delay: 350,
            duration: 1000,
            distance: '800px',
            opacity: 1,
            origin: 'right',
        });

        ScrollReveal().reveal('.image-2', {
            delay: 350,
            duration: 1000,
            opacity: 1,
            distance: '800px',
            origin: 'left'
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

        ScrollReveal().reveal('.desc-2', {
            delay: 500,
            duration: 1000,
            distance: '100px',
            origin: 'bottom'
        });

        ScrollReveal().reveal('.progress-1', {
            delay: 700,
            duration: 1000,
            distance: '200px',
            origin: 'left'
        });

        ScrollReveal().reveal('.progress-2', {
            delay: 1200,
            duration: 1000,
            distance: '200px',
            origin: 'left'
        });

        ScrollReveal().reveal('.box', {
            delay: 300,
            duration: 1000,
            distance: '100px',
            origin: 'bottom'
        });


        for (let i = 1; i < 16; i++) {
            ScrollReveal().reveal('.logo-' + i, {
                delay: 700 + i * 150,
                duration: 1000,
                distance: '100px',
                origin: 'bottom'
            });
        }
    </script>

    {{-- <div class="flex flex-col items-center justify-center py-12 biru-muda mt-16">
        <div class="tracking-[5px] font-semibold opensans text-3xl mb-2">SUBSCRIBE</div>
        <div class="mb-6 text-xl inter">Join us to receive product news and industry updates from us</div>
        <div class="text-biru inter font-bold text-xl px-5 py-3 bg-white border border-[#2D5290] rounded cursor-pointer">
            JOIN WITH US
        </div>
    </div> --}}
@endsection
