@extends('layouts.frontend')


@section('content')
    <div class="w-full flex justify-between items-center mb-36">

        <div class="inter px-20 py-20 w-1/2">
            <div class="text-4xl font-bold">Research & Development</div>

            <div class="h-1 w-1/2 biru my-3"></div>

            <div class="text-xl mb-3">At LMP we create an environment in research and development
                (R&D) that enables the best scientific minds in the world to
                create the innovations that form the foundation of our future.
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
                <div class="absolute z-30">
                    <div class="bruno text-xl text-white mb-3 text-center">Research & Development</div>
                    <div class="w-[110%] right-3 relative h-1 bg-white"></div>
                </div>
                <img class="relative z-20 w-full" src="{{ asset('images/research/1.jpg') }}" alt="">
            </div>
            <div class="absolute w-full h-full bg-[#E6F6FE] top-8 right-8">

            </div>
        </div>
    </div>
    <div class="flex flex-col relative pb-48">
        <img class="absolute w-36 top-20" src="{{ asset('images/dot1.png') }}" alt="">
        <img class="absolute  right-0 bottom-0" src="{{ asset('images/research/leaf.png') }}" alt="">
        <div class="relative z-20 px-20 text-2xl w-2/3 tracking-wide mb-32">
            We thrive on change and have built a culture that enables us to remain
            at the forefront of the markets we serve, often working closely with our customers.
        </div>

        <div class="relative z-20 px-20 text-2xl w-2/3 tracking-wide self-end">
            Our R&D teams regularly share expertise across both materials and businesses,
            enabling us to dynamically allocate resources to the most promising opportunities.
        </div>
    </div>
@endsection
