@extends('layouts.frontend')


@section('content')
    <x-top-setion2 title="Research & Development" subTitle="{{ null }}" theme="" image="research/1"
        desc="At LMP we create an environment in research and
    development (R&D) that enables the best scientific
    minds in the world to create the innovations that
    form the foundation of our future. "
        theme="Research & Development" />

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
