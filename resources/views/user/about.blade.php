@extends('layouts.frontend')


@section('content')
    <div>
        <div class="inter mb-20 px-20 pt-36">
            <div class="text-3xl font-bold">About LMP</div>

            <div class="h-1 w-1/4 biru my-2"></div>

            <div class=""><span class="text-biru">Our mission </span>Evolving the way world thinks about connectivity.
            </div>
        </div>

        <div class="flex justify-center items-center gap-36 px-36 mb-36">
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

        <div>
            <div class="text-biru text-5xl bruno mb-24 mx-40">
                LMP Group
            </div>

            <div class="flex items-center relative">
                <div class="w-1/2 relative z-20">
                    <img src="{{ asset('images/about/LMP.jpg') }}" alt="">
                </div>
                <div class="py-28 biru-muda-2 w-2/3 pl-[250px] pr-20 absolute right-0">
                    <div class="font-bold text-xl">
                        LMP Networks
                    </div>

                    <div class="my-8 text-lg inter">
                        Optimizing Network Performance for
                        Comprehensive Analysis andSecurity Challenges
                        in Modern Networks with Strategies and Solutions
                    </div>


                    <div
                        class="border border-[#2D5290] px-3 py-2 rounded text-biru font-medium poppins max-w-fit cursor-pointer">
                        Click here ->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
