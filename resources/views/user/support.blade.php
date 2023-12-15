@extends('layouts.frontend')


@section('content')
    <div>
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
                    <img class="relative z-20 w-full" src="{{ asset('images/support/bg.jpg') }}" alt="">
                </div>
                <div class="absolute w-full h-full bg-[#E6F6FE] top-8 right-8">

                </div>
            </div>
        </div>

        <div class="flex flex-wrap gap-28 items-center justify-center mb-36">
            @php
                $text = ['Technical Support', 'Consultant products', 'Consultant Solutions'];
            @endphp
            @for ($i = 1; $i < 4; $i++)
                <div class="relative biru flex flex-col items-center justify-center text-center p-8 rounded-lg">
                    <img class="mb-7 relative z-20" src="{{ asset('images/support/' . $i . '.png') }}" alt="">

                    <div class="text-2xl text-white font-bold ">{{ $text[$i - 1] }}</div>
                </div>
            @endfor
        </div>

        <div class="px-20 mb-32">
            <div class="mb-24">
                <div class="font-bold text-3xl">Contact Support</div>
                <div class="my-4 text-xl">Get ongoing support for products already purchased</div>
                <div class="text-biru text-xl">(+62 21) 82692369</div>
            </div>

            <div>
                <div class="text-3xl font-bold mb-5">Training & Learning Center</div>

                <div class="flex items-center gap-20">
                    <div class="relative max-w-max w-3/5">
                        <img class="relative z-20 h-full" src="{{ asset('images/support/bg2.jpg') }}" alt="">
                        <div class="h-full w-full absolute border border-[#3F73AE] top-8 left-8"></div>
                    </div>
                    <div class="text-xl w-1/3 tracking-wider">
                        Our training and development courses can advance skills and technical
                        knowledge in both industry best practices and LMP products, to help
                        realize the full potential of your IT infrastructure or facilities. Standard or
                        specialized trainings can take place at LMP Learning or at your location
                        upon request.
                    </div>
                </div>

            </div>
        </div>


    </div>
@endsection
