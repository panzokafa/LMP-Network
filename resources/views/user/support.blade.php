@extends('layouts.frontend')


@section('content')
    <div class="lg:pb-2">
        <x-top-setion2 title="LMP Support" subTitle="{{ null }}" theme="{{ null }}" image="support/bg"
            desc="Locate your specific product for the latest user
            manuals, system application guides, data sheets,
            warranties, software downloads and more."
            text="" />

        <div class="max-lg:px-7">
            <div class="flex flex-wrap lg:gap-28 gap-14 items-center justify-center lg:mb-36 mb-20 desc">
                @php
                    $text = ['Technical Support', 'Consultant products', 'Consultant Solutions'];
                @endphp
                @for ($i = 1; $i < 4; $i++)
                    {{-- <div
                    class="{{ 'support-' . $i }} relative biru flex flex-col items-center justify-center text-center p-8 rounded-lg">
                    <img class="mb-7 relative z-20" src="{{ asset('images/support/' . $i . '.png') }}" alt="">

                    <div class="lg:text-2xl sm:text-xl text-lg text-white font-bold ">{{ $text[$i - 1] }}</div>
                </div> --}}

                    <x-box image='support/{{ $i }}' title="{{ $text[$i - 1] }}" />
                @endfor
            </div>

            <div class="lg:px-20 mb-32">
                <div class="lg:mb-24 mb-14">
                    <div class="font-bold lg:text-3xl sm:text-2xl text-xl title-2">Contact Support</div>
                    <div class="lg:my-4 my-2 lg:text-xl sm:text-lg desc-2">Get ongoing support for products already
                        purchased
                    </div>
                    <div class="text-biru lg:text-xl sm:text-lg desc-2">(+62 21) 82692369</div>
                </div>

                <div>
                    <div class="lg:text-3xl sm:text-2xl text-xl font-bold mb-12 max-lg:hidden max-lg:text-center image-2">
                        Training &
                        Learning
                        Center
                    </div>

                    <div class="flex lg:flex-row flex-col items-center lg:gap-20 gap-5">
                        <div class="image-2 relative max-w-max lg:w-3/5 w-full">
                            <img class="relative z-20 h-full w-full" src="{{ asset('images/support/bg2.jpg') }}"
                                alt="">
                            <div class="h-full w-full absolute border border-[#3F73AE] lg:top-7 lg:left-7 top-4 left-4">
                            </div>
                        </div>

                        <div class="lg:text-3xl sm:text-2xl text-xl font-bold lg:hidden mt-5 image-2">Training & Learning
                            Center
                        </div>

                        <div class="lg:text-xl sm:text-lg lg:w-3/5 lg:tracking-wider max-lg:text-center fade">
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

    </div>

    <script>
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
            distance: '800px',
            opacity: 1,
            origin: 'left',
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

        ScrollReveal().reveal('.desc-2', {
            delay: 700,
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
        ScrollReveal().reveal('.fade', {
            delay: 500,
            duration: 1000,
            opacity: 0,
            distance: '50px',
            origin: 'bottom'
        });
        for (let i = 1; i < 4; i++) {
            ScrollReveal().reveal('.support-' + i, {
                delay: 700 + i * 100,
                duration: 1000,
                distance: '100px',
                origin: 'bottom'
            });
        }
    </script>
@endsection
