@extends('layouts.frontend')


@section('content')
    <div class="relative">
        <img class="object-cover w-full" src="{{ asset('images/banner.jpg') }}" alt="">

        <div class="tracking-wider leading-normal w-1/3 poppins text-4xl bruno text-white absolute bottom-[40%] left-20">
            Ultra High
            Density
            Edge Data Center <span class="text-hijau">For
                Greener Data Center</span></div>

        <div class="text-xl absolute right-24 bottom-16 text-white">Product -></div>
    </div>

    <!--section-->
    <div class="px-20">
        <div>
            <div class="flex justify-between items-center py-14">
                <div class="w-1/2 relative">
                    <img class=" w-[140px] h-auto absolute top-[-100px] left-[-50px]" src="{{ asset('images/dot1.png') }}"
                        alt="">
                    <div class="text-hijau text-5xl mb-12 bruno relative z-10">
                        GREEN
                    </div>
                    <div class="text-3xl tracking-wide inter relative z-10 font-semibold w-2/3 leading-relaxed">
                        Environmentally friendly technology
                        plays a crucial role in preserving the
                        sustainability of our planet
                    </div>
                </div>

                <div class="flex justify-end relative w-2/5 h-full">
                    <div class="w-3/5 bg-[#E6F6FE] absolute right-0 h-full rounded"></div>
                    <img class="w-2/3 relative top-12 right-5" src="{{ asset('images/earth.png') }}" alt="">
                </div>
            </div>
        </div>

        <!--section-->
        <div class="mb-48">
            <div class="flex items-center justify-center justify-between ">
                <img class="w-[450px]" src="{{ asset('images/forest.png') }}" alt="">

                <div class=" relative w-2/5">
                    <div class="text-3xl tracking-wide inter font-semibold leading-relaxed">
                        This technology paves the way to a cleaner
                        and greener world, as much as we can live
                        a modern lifestyle without distractions
                        the earth where we live.
                    </div>
                </div>
            </div>
        </div>


        <!--banner biru--->
        <div class="relative flex justify-center mb-32 max-w-fit m-auto">
            <img class="absolute w-36 h-auto left-[-50px] bottom-16" src="{{ asset('images/dot1.png') }}" alt="">
            <div class="relative z-10 biru-muda flex-col flex gap-5 py-7 px-24 text-center max-w-max rounded">
                <div class="inter font-bold text-3xl">Your business needs a competitive advantage</div>
                <div class="inter text-xl">Stay fast and connected by implementing digital services that are closest to the
                    cloud
                    and <br> network density to grow your business and achieve success.</div>
            </div>
            <img class="absolute z-10 right-[-50px] w-[110px] bottom-[-25px]" src="{{ asset('images/leaf.png') }}"
                alt="">
        </div>

        <!--turbine section--->

        <div class="mb-36">
            <div class="flex justify-between items-center pl-20">
                <div class="w-1/2 relative">
                    <div class="text-3xl tracking-wide inter relative z-10 font-semibold w-2/3 leading-relaxed mb-5">
                        Renewable energy sources are emerging as bright stars in the shift towards a clean and sustainable
                        future.
                    </div>

                    <div class="cursor-pointer text-2xl text-biru font-semibold">
                        Check Here ->
                    </div>
                </div>

                <div class="flex justify-end relative w-1/3 h-full">
                    <div class="w-full bg-[#E6F6FE] absolute right-0 h-full rounded z-10"></div>
                    <img class="w-full relative top-10 right-5 z-20" src="{{ asset('images/turbine.jpg') }}" alt="">
                    <img class="w-[140px] bottom-[-80px] left-[-80px] absolute" src="{{ asset('images/dot1.png') }}"
                        alt="">
                </div>
            </div>
        </div>

        <!--panel section--->

        <div class="mb-36">
            <div class="flex flex-row-reverse justify-between items-center pr-20">
                <div class="w-1/3 relative">
                    <div class="text-3xl tracking-wide inter relative z-10 font-semibold leading-relaxed mb-5 relative">
                        Great solution to your interesting request
                    </div>

                    <div class="cursor-pointer text-2xl text-biru font-semibold">
                        Check Here ->
                    </div>
                </div>

                <div class="flex justify-end relative w-1/3 h-full">
                    <div class="w-full bg-[#E6F6FE] absolute left-10 h-full rounded z-10"></div>
                    <img class="w-full relative bottom-10 right-0 z-20" src="{{ asset('images/panel.jpg') }}"
                        alt="">
                    <img class="w-[140px] bottom-[-40px] right-[-80px] absolute" src="{{ asset('images/dot1.png') }}"
                        alt="">
                </div>
            </div>
        </div>

        <!--machine section--->

        <div class="mb-36 inter">
            <div class="flex justify-between items-center pl-20">
                <div class="w-1/2 relative">
                    <div class="text-center text-biru text-3xl mb-24">
                        LMP <span class="text-black">In Numbers</span>
                    </div>

                    <div class="grid grid-cols-2 gap-x-24 gap-y-36">
                        <div>
                            <div class="text-3xl mb-8">
                                48
                            </div>
                            <div class="h-1 w-full bg-[#A0A0A0] mb-5">
                                <div class="h-1 bg-black" style="width: 7%"></div>
                            </div>

                            <div class="text-lg text-[#797979]">
                                EMPLOYEES
                            </div>
                        </div>

                        <div>
                            <div class="text-3xl mb-8">
                                45%
                            </div>
                            <div class="h-1 w-full bg-[#A0A0A0] mb-5">
                                <div class="h-1 bg-black" style="width: 45%"></div>
                            </div>
                            <div class="text-lg text-[#797979]">
                                TKDN
                            </div>
                        </div>

                        <div>
                            <div class="text-3xl mb-8">
                                $413M
                            </div>
                            <div class="h-1 w-full bg-[#A0A0A0] mb-5">
                                <div class="h-1 bg-black" style="width: 15%"></div>
                            </div>
                            <div class="text-lg text-[#797979]">
                                CAPITAL
                            </div>
                        </div>

                        <div>
                            <div class="text-3xl mb-8">
                                10
                            </div>
                            <div class="h-1 w-full bg-[#A0A0A0] mb-5">
                                <div class="h-1 bg-black" style="width: 10%"></div>
                            </div>
                            <div class="text-lg text-[#797979]">
                                CLIENTS
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end relative w-1/3 h-full">

                    <div class="w-full bg-[#E6F6FE] absolute right-10 top-10 h-full rounded"></div>
                    <img class="w-full relative" src="{{ asset('images/machine.jpg') }}" alt="">
                </div>
            </div>
        </div>
        {{--
        <div class="font-bold text-4xl mb-12 pl-20 inter">Feedback Client</div>
        <section class="splide" aria-labelledby="carousel-heading">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide biru flex items-center justify-center py-12 justify-center gap-36">
                        <div class="w-[300px] h-[250px] bg-black"></div>
                        <div class="w-2/5 text-white">
                            <div class="font-bold text-xl mb-4">Santo</div>

                            <div class="text-lg ">A revolutionary solution to enhance efficiency, improve performance,
                                and optimize your best Edge data center. With an approach that
                                brings data processing closer to its source, we deliver remarkable
                                latency reduction for maximum results in energy, cooling
                                and connectivity.</div>

                        </div>
                    </li>

                    <li class="splide__slide biru flex items-center justify-center py-12 justify-center gap-36">
                        <div class="w-[300px] h-[250px] bg-black"></div>
                        <div class="w-2/5 text-white">
                            <div class="font-bold text-xl mb-4">Santo</div>

                            <div class="text-lg ">A revolutionary solution to enhance efficiency, improve performance,
                                and optimize your best Edge data center. With an approach that
                                brings data processing closer to its source, we deliver remarkable
                                latency reduction for maximum results in energy, cooling
                                and connectivity.</div>

                        </div>
                    </li>
                </ul>
            </div>
        </section> --}}

        <!--client--->
        <div class="flex flex-col items-center mt-24">
            <div class="inter font-bold mb-5 inter font-bold text-4xl">Clients</div>
            <div class="inter mb-12 text-xl">​We are proud and committed to helping our customers every step of the way and
                providing
                benefits solutions to meet all their needs.</div>

            <div class="grid grid-cols-5 gap-x-32 items-center gap-y-16 mb-24">
                <img src="{{ asset('images/sponsor/keuangan.png') }}" class="w-28 h-auto">
                <img src="{{ asset('images/sponsor/kementrian.png') }}" class="w-32 h-auto">
                <img src="{{ asset('images/sponsor/kominfo.png') }}" class="w-32 h-auto">
                <img src="{{ asset('images/sponsor/psn.png') }}" class="w-32 h-auto">
                <img src="{{ asset('images/sponsor/mandiri.png') }}" class="w-32 h-auto">
                <img src="{{ asset('images/sponsor/telkomsel.png') }}" class="w-32 h-auto">
                <img src="{{ asset('images/sponsor/telkomsigma.png') }}" class="w-32 h-auto">
                <img src="{{ asset('images/sponsor/telkomakses.png') }}" class="w-32 h-auto">
                <img src="{{ asset('images/sponsor/indosat.png') }}" class="w-32 h-auto">
                <img src="{{ asset('images/sponsor/jasamarga.png') }}" class="w-32 h-auto">
                <img src="{{ asset('images/sponsor/peruri.png') }}" class="w-32 h-auto">
                <img src="{{ asset('images/sponsor/snl.png') }}" class="w-32 h-auto">
                <img src="{{ asset('images/sponsor/pegadaian.png') }}" class="w-32 h-auto">
                <img src="{{ asset('images/sponsor/freeport.png') }}" class="w-32 h-auto">
                <img src="{{ asset('images/sponsor/bukopin.png') }}" class="w-32 h-auto">
            </div>
            <div class="inter font-semibold text-2xl pb-5">and many more... </div>
        </div>
    </div>

    {{-- <div class="flex flex-col items-center justify-center py-12 biru-muda mt-16">
        <div class="tracking-[5px] font-semibold opensans text-3xl mb-2">SUBSCRIBE</div>
        <div class="mb-6 text-xl inter">Join us to receive product news and industry updates from us</div>
        <div class="text-biru inter font-bold text-xl px-5 py-3 bg-white border border-[#2D5290] rounded cursor-pointer">
            JOIN WITH US
        </div>
    </div> --}}
@endsection
