@extends('layouts.frontend')


@section('content')
    <div
        class="w-full flex lg:flex-row flex-col-reverse justify-between items-center lg:mb-36 mb-24 max-lg:pt-14 max-lg:px-7">

        <div class="inter lg:pl-20 lg:w-1/2 text-center lg:text-left 2xl:mt-0 relative lg:top-10 top-14">

            <div class="max-w-max max-lg:mx-auto">
                <div class="2xl:text-4xl lg:text-3xl sm:text-2xl text-xl font-bold max-lg:px-10 title">Research & Development
                </div>

                <div class="title h-1 w-full biru sm:my-5 my-3"></div>
            </div>

            <div class="desc md:text-xl lg:mb-3 mb-5">At LMP we create an environment in research and development
                (R&D) that enables the best scientific minds in the world to
                create the innovations that form the foundation of our future.
            </div>

            <div class="desc md:text-xl">
                We continue to reinvest approximately 10-15 percent of our
                revenues into R&D, providing our scientists - expert & engineers
                with the resources they need to be successful.
            </div>
        </div>


        <div class="flex relative lg:w-2/5 h-full relative max-lg:left-3 image-1">
            <div class="flex items-center justify-center w-full">
                <div class="absolute z-30">
                    <div class="bruno lg:text-xl sm:text-lg text-white lg:mb-3 mb-2 text-center">Research & Development
                    </div>
                    <div class="w-[110%] right-3 relative sm:h-1 h-0.5 bg-white"></div>
                </div>
                <img class="relative z-20 w-full" src="{{ asset('images/research/1.jpg') }}" alt="">
            </div>
            <div class="absolute w-full h-full bg-[#E6F6FE] sm:top-8 sm:right-8 top-5 right-5">

            </div>
        </div>
    </div>
    <div class="flex flex-col relative lg:pb-48 pb-24 max-lg:px-10 max-lg:text-center">
        <img class="absolute sm:w-36 w-24 top-20 max-lg:left-[-20px]" src="{{ asset('images/dot1.png') }}" alt="">
        <img class="absolute right-5 bottom-5 max-sm:w-1/4" src="{{ asset('images/research/leaf.png') }}" alt="">
        <div class="desc-2 relative z-20 lg:px-20 lg:text-2xl md:text-xl lg:w-2/3 tracking-wide lg:mb-32 mb-5">
            We thrive on change and have built a culture that enables us to remain
            at the forefront of the markets we serve, often working closely with our customers.
        </div>

        <div class="desc-2 relative z-20 lg:px-20 lg:text-2xl md:text-xl lg:w-2/3 tracking-wide self-end">
            Our R&D teams regularly share expertise across both materials and businesses,
            enabling us to dynamically allocate resources to the most promising opportunities.
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

        ScrollReveal().reveal('.desc-2', {
            delay: 500,
            duration: 1000,
            distance: '100px',
            origin: 'bottom'
        });
    </script>
@endsection
