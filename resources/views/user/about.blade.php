@extends('layouts.frontend')



@section('content')
    <div class="lg:px-0 md:px-10 px-5 lg:py-16 py-12">
        <div
            class="title-2 inter lg:mb-20 sm:mb-8 mb-5 sm:px-20 px-10 lg:max-w-max w-full flex-col max-lg:items-center max-lg:text-center">
            <div class="lg:text-4xl text-2xl font-bold">About LMP</div>

            <div class="h-1 lg:w-full w-2/3 max-lg:mx-auto biru lg:my-4 my-2"></div>

            <div class="text-lg"><span class="text-biru">Our mission </span>Evolving the way world thinks about connectivity.
            </div>
        </div>

        <div
            class="fade flex lg:flex-row flex-col items-center justify-center lg:gap-36 sm:gap-10 gap-5 2xl:px-48 xl:px-26 sm:px-20 px-5 lg:mb-36 mb-16 relative z-20">
            <div class="flex lg:flex-col flex-row-reverse justify-center items-center">
                <div class="bruno sm:text-3xl text-2xl lg:mb-6 text-center lg:w-[300px] w-auto">WHY LMP</div>
                <img class="lg:w-full sm:w-1/3 w-1/4" src="{{ asset('images/about/atom.png') }}" alt="">
            </div>

            <div class="lg:text-2xl sm:text-xl font-medium lg:w-1/2 w-full lg:text-left text-center md:leading-10">
                At LMP we design and manufacture
                all the solution by considering and
                put forward environment sustainability
            </div>
        </div>


        <div class="lg:mb-32 mb-20">
            <div class="lg:mx-40 mx-auto justify-center flex relative max-w-max">
                <img class="absolute lg:w-[140px] w-28 bottom-1/2 left-[-50px]" src="{{ asset('images/dot1.png') }}"
                    alt="">
                <div class="lg:mb-24 sm:mb-12 mb-6 text-biru lg:text-5xl text-4xl bruno relative z-10">LMP Group</div>
            </div>

            <div class="flex flex-col justify-center lg:gap-36 gap-6 w-full lg:mb-36 mb-16">
                <x-about.card title="Networks" image="LMP"
                    desc="Optimizing Network Performance for
            Comprehensive Analysis and Security Challenges
            in Modern Networks with Strategies and Solutions" />

                <x-about.card-reverse title="Networks" image="LMP"
                    desc="Optimizing Network Performance for
        Comprehensive Analysis and Security Challenges
        in Modern Networks with Strategies and Solutions" />

            </div>


            <div class="gap-20 lg:mb-44 mb-16">
                <div class="flex lg:gap-20 sm:gap-10 gap-5 lg:flex-row flex-col items-center">
                    <div class="card flex justify-end relative lg:w-1/3 w-11/12 h-full relative right-3">
                        <div class="w-full border-2 border-[rgb(63,115,174)] absolute lg:left-8 left-4 h-full z-10"></div>
                        <img class="w-full relative lg:bottom-8 bottom-4 right-0 z-20" src="{{ asset('images/panel.jpg') }}"
                            alt="">
                    </div>

                    <div class="xl:w-1/3 lg:w-1/2 relative max-lg:text-center">
                        <div class="title lg:text-2xl sm:text-xl text-lg mb-5 poppins font-medium">
                            Research & Development
                        </div>
                        <div
                            class="desc lg:text-xl sm:text-lg  2xl:tracking-widest poppins relative z-10 leading-relaxed mb-5 relative">
                            The multidisciplinary nature of our focused
                            Philosophy Research Center has been the
                            major strength of our research since we
                            began our work in 2018.
                        </div>

                        <div class="desc cursor-pointer lg:text-xl text-lg text-biru font-medium">
                            Read more
                        </div>
                    </div>
                </div>
            </div>

            <!--history section--->
            <div class="flex flex-col xl:px-44 lg:px-28 px-5 relative">

                <img class="absolute lg:w-36 w-24 top-[-10%] lg:left-0 left-[-40px]" src="{{ asset('images/dot1.png') }}"
                    alt="">
                <div class="title-2 font-bold text-center lg:text-4xl text-2xl lg:mb-24 mb-12 relative z-20">LMP History
                </div>
                <div class="flex lg:flex-col flex-row lg:gap-20 gap-5 justify-center">
                    <div class="flex lg:flex-row flex-col gap-10 justify-between lg:text-center text-right max-lg:w-1/2">
                        <div class="history-1">
                            <div class="xl:text-2xl sm:text-xl text-lg poppins lg:mb-3 mb-2 font-medium">
                                2018 October
                            </div>

                            <div class="xl:text-xl lg:text-lg sm:text-base text-sm">
                                MTE Established in Bekasi, <br>
                                West Java Indonesia
                            </div>
                        </div>

                        <div class="history-2">
                            <div class="xl:text-2xl sm:text-xl text-lg poppins lg:mb-3 mb-2 font-medium">
                                2021 September
                            </div>

                            <div class="xl:text-xl lg:text-lg sm:text-base text-sm">
                                Launch LMP Ultra High Density Enclosure <br>
                                Solution for Hyperscale Data Center. <br>
                                Pointed Two Authorized Distributor
                            </div>
                        </div>

                        <div class="history-3">
                            <div class="xl:text-2xl sm:text-xl text-lg poppins lg:mb-3 mb-2 font-medium">
                                2023
                            </div>

                            <div class="xl:text-xl lg:text-lg sm:text-base text-sm">
                                Launch LMP Cooling System, Ups, <br>
                                Cold Aisle Containment & Hot Aisle <br>
                                Containment
                            </div>
                        </div>
                    </div>

                    <div
                        class="title-2 lg:w-full w-2 lg:h-2 biru-muda rounded flex lg:flex-row flex-col items-center justify-between">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="h-4 w-4 biru rounded-full"></div>
                        @endfor
                    </div>

                    <div
                        class="flex  lg:flex-row flex-col  gap-40 items-center justify-center lg:text-center text-left max-lg:w-1/2">
                        <div class="history-4">
                            <div class="xl:text-2xl sm:text-xl text-lg poppins lg:mb-3 mb-2 font-medium">
                                2019 June
                            </div>

                            <div class="xl:text-xl lg:text-lg sm:text-base text-sm">
                                Established Fiber Optic Assembling Plant & Launch <br>
                                LMP Networks Fiber Optic Patchcord MPO Manageable. <br>
                                The 1st Manageable MPO that produce in Indonesia. <br>
                                Support By Global Manufactures
                            </div>
                        </div>

                        <div class="history-5">
                            <div class="xl:text-2xl sm:text-xl text-lg poppins lg:mb-3 mb-2 font-medium">
                                2022 November
                            </div>

                            <div class="xl:text-xl lg:text-lg sm:text-base text-sm">
                                Launch LMP Network Cooper cable, Smart <br>
                                Patch Panel (Fiber & Cooper) & DCIM, AIO <br>
                                Container DC. Pointed Five Authorized Distributor <br>
                            </div>
                        </div>

                    </div>
                </div>



            </div>

        </div>
        <script>
            ScrollReveal().reveal('.title', {
                delay: 700,
                duration: 1000,
                distance: '100px',
                origin: 'bottom'
            });

            ScrollReveal().reveal('.title-2', {
                delay: 300,
                duration: 1000,
                distance: '50px',
                origin: 'bottom'
            });

            ScrollReveal().reveal('.card', {
                delay: 350,
                duration: 1000,
                distance: '800px',
                opacity: 1,
                origin: 'left',
            });

            ScrollReveal().reveal('.desc', {
                delay: 1000,
                duration: 1000,
                distance: '100px',
                origin: 'bottom'
            });

            ScrollReveal().reveal('.fade', {
                delay: 1000,
                duration: 1000,
                distance: '50px',
                origin: 'bottom',
                opacity: 0,
            });

            for (let i = 1; i < 6; i++) {
                ScrollReveal().reveal('.history-' + i, {
                    delay: 700 + i * 150,
                    duration: 1000,
                    distance: '100px',
                    origin: 'bottom'
                });
            }
        </script>
    </div>
@endsection
