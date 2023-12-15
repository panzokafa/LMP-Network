@extends('layouts.frontend')


@section('content')
    <div>
        <div class="inter mb-20 px-20 pt-36">
            <div class="text-4xl font-bold">About LMP</div>

            <div class="h-1 w-1/4 biru my-2"></div>

            <div class=""><span class="text-biru">Our mission </span>Evolving the way world thinks about connectivity.
            </div>
        </div>

        <div class="flex justify-between items-center gap-36 px-56 mb-36">
            <div>
                <div class="bruno text-3xl mb-6 text-center w-[300px] w-auto">WHY LMP</div>
                <img src="{{ asset('images/about/atom.png') }}" alt="">
            </div>

            <div class="text-2xl font-medium w-1/3 leading-10">
                At LMP we design and manufacture
                all the solution by considering and
                put forward environment sustainability
            </div>
        </div>
        {{--
        <div class="flex justify-center items-center gap-28 mb-36">
            <img src="{{ asset('images/about/why.png') }}" alt="">
            <div class="text-2xl inter">
                At LMP we design and manufacture
                all the solution by considering and
                put forward environment sustainability
            </div>
        </div> --}}

        <div class="mb-32">
            <div class=" mx-40 relative">
                <img class="absolute w-[140px] bottom-[-100%] left-[-3%]" src="{{ asset('images/dot1.png') }}"
                    alt="">
                <div class="mb-24 text-biru text-5xl bruno relative z-10">LMP Group</div>
            </div>

            <div class="flex items-center relative mb-36">
                <div class="relative z-20 w-1/2">
                    <img class="w-full" src="{{ asset('images/about/LMP.jpg') }}" alt="">
                </div>
                <div class="h-[108%] biru-muda-2 w-[55%] absolute right-0 flex-col justify-center flex pl-40 pr-20 right-0">
                    <div class="font-bold text-xl">
                        LMP Networks
                    </div>

                    <div class="my-8 text-lg inter">
                        Optimizing Network Performance for
                        Comprehensive Analysis andSecurity Challenges
                        in Modern Networks with Strategies and Solutions
                    </div>


                    <div
                        class="border border-[#2D5290] px-3 py-2 rounded text-biru font-medium poppins max-w-fit cursor-  ">
                        Click here ->
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end relative mb-36 w-full">

                <div class="h-[108%] biru-muda-2 w-[55%] absolute left-0 flex-col justify-center flex pl-40 pr-20 right-0">
                    <div class="font-bold text-xl">
                        LMP Networks
                    </div>

                    <div class="my-8 text-lg inter">
                        Optimizing Network Performance for
                        Comprehensive Analysis andSecurity Challenges
                        in Modern Networks with Strategies and Solutions
                    </div>


                    <div
                        class="border border-[#2D5290] px-3 py-2 rounded text-biru font-medium poppins max-w-fit cursor-  ">
                        Click here ->
                    </div>
                </div>

                <div class="relative w-1/2 z-20">
                    <img class="w-full" src="{{ asset('images/about/LMP.jpg') }}" alt="">
                </div>
            </div>

            <div class="flex gap-20 items-center mb-36">
                <div class="flex justify-end relative w-1/3 h-full">
                    <div class="w-full border-2 border-[rgb(63,115,174)] absolute left-10 h-full z-10"></div>
                    <img class="w-full relative bottom-10 right-0 z-20" src="{{ asset('images/panel.jpg') }}"
                        alt="">
                </div>

                <div class="w-1/3 relative">
                    <div class="text-2xl mb-5 poppins font-medium">
                        Research & Development
                    </div>
                    <div class="text-xl tracking-wide poppins relative z-10 leading-relaxed mb-5 relative">
                        The multidisciplinary nature of our focused
                        Philosophy Research Center has been the
                        major strength of our research since we
                        began our work in 2018.
                    </div>

                    <div class="cursor-pointer text-xl text-biru font-medium">
                        Read more ->
                    </div>
                </div>
            </div>

            <div class="flex flex-col px-44 relative">

                <img class="absolute top-0 w-36 top-[-15%]" src="{{ asset('images/dot1.png') }}" alt="">
                <div class="font-bold text-center text-4xl mb-24">LMP History</div>

                <div class="flex justify-between items-center">
                    <div class="text-center">
                        <div class="text-2xl poppins mb-3">
                            2018 October
                        </div>

                        <div class="text-xl">
                            MTE Established in Bekasi, <br>
                            West Java Indonesia
                        </div>
                    </div>

                    <div class="text-center">
                        <div class="text-2xl poppins mb-3">
                            2021 September
                        </div>

                        <div class="text-xl">
                            Launch LMP Ultra High Density Enclosure <br>
                            Solution for Hyperscale Data Center. <br>
                            Pointed Two Authorized Distributor
                        </div>
                    </div>

                    <div class="text-center">
                        <div class="text-2xl poppins mb-3">
                            2023
                        </div>

                        <div class="text-xl">
                            Launch LMP Cooling System, Ups, <br>
                            Cold Aisle Containment & Hot Aisle <br>
                            Containment
                        </div>
                    </div>
                </div>

                <div class="w-full h-2 biru-muda rounded my-20 flex items-center justify-between">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="h-4 w-4 biru rounded-full"></div>
                    @endfor
                </div>

                <div class="flex gap-40 items-center justify-center">
                    <div class="text-center">
                        <div class="text-2xl poppins mb-3">
                            2019 June
                        </div>

                        <div class="text-xl">
                            Established Fiber Optic Assembling Plant & Launch <br>
                            LMP Networks Fiber Optic Patchcord MPO Manageable. <br>
                            The 1st Manageable MPO that produce in Indonesia. <br>
                            Support By Global Manufactures
                        </div>
                    </div>

                    <div class="text-center">
                        <div class="text-2xl poppins mb-3">
                            2022 November
                        </div>

                        <div class="text-xl">
                            Launch LMP Network Cooper cable, Smart <br>
                            Patch Panel (Fiber & Cooper) & DCIM, AIO <br>
                            Container DC. Pointed Five Authorized Distributor <br>
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </div>
@endsection
