@extends('layouts.frontend')


@section('content')
    <div class="py-12 lg:px-20 sm:px-10 px-5">
        <div class="w-full flex lg:flex-row flex-col justify-between items-center mb-14 gap-12">

            <div class="inter  lg:w-1/2">
                <div class="title xl:text-4xl lg:text-3xl sm:text-2xl text-xl font-bold mb-5">Cold Aisle Containment
                </div>


                <div class="desc lg:text-xl sm:text-lg mb-5">Containment is a frame designed to regulate
                    or trap air within it, both hot air and cold air.
                    General description of Containment on the
                    front and back there are doors using Temper
                    Glass, on the right and left sides covered with
                    Rack and on the top there is a ceiling in the
                    form of UL94 (Fire Resistant) polycarbonate
                    which can open automatically in the event of a
                    fire and is also equipped with a cooling system,
                    system security, Tray Cable Systems and EMS
                </div>

                <div class="desc flex lg:flex-row flex-col lg:gap-7 gap-4  items-center">
                    <div
                        class="font-semibold cursor-pointer hover:bg-white hover:border-2 hover:text-biru duration-300 hover:border-[#1780BB] border-2 border-[#3F73AE] py-3 px-4 bg-[#3F73AE] text-white rounded-md max-lg:w-full max-lg:text-center">
                        Pre
                        Order</div>
                    <div
                        class="font-semibold cursor-pointer py-3 px-4 biru text-white rounded-md max-lg:w-full max-lg:text-center hover:bg-white hover:border-2 hover:text-biru duration-300 hover:border-[#3F73AE] border-2 border-[#1780BB]">
                        Get Brochure</div>

                </div>
            </div>
            <div class="flex items-center xl:justify-center lg:justify-end w-1/2 image flex flex-col items-center">
                <img class="relative z-20 mb-5" src="{{ asset('images/product/containment/cold-aisle-containment.png') }}"
                    alt="">
                <div class="flex gap-10 items-center">
                    <img class="max-lg:scale-75" src="{{ asset('images/product/p3dn.png') }}" alt="">

                    <div class="lg:text-2xl sm:txt-lg">46.99</div>
                </div>
            </div>
        </div>

        <div class="lg:text-3xl sm:text-2xl text-xl font-semibold text-biru mb-7">
            Similar products
        </div>

        <div class="grid lg:grid-cols-2 grid-cols-1 gap-4">
            @php
                $image = ['half-containment', 'hot-aisle-containment', 'centrinium-containment'];
                $title = ['Half Containment ', 'Hot Aisle Containment', 'Centrinium Containment'];
                $desc = [
                    'The containment design is adjusted space
                    in the data center roomwhich usually has 1
                    rowadjacent to the wall so that onthe part
                    adjacent to the wall is replacedwith temper
                    glass.',
                    'Containment is a frame designed to regulate
                    or trap air within it, both hot air and cold air.
                    General description of Containment on the
                    front and back there are doors using Temper
                    Glass, on the right and left sides covered with
                    Rack and on the top there is a ceiling in the
                    form of UL94 (Fire Resistant) polycarbonate
                    which can open automatically in the event of a
                    fire and is also equipped with a cooling system,
                    system security, Tray Cable Systems and EMS',
                    'Containment Data Center Cabinet Capacity 20 racks (Compatible
                    with rack 42 - 45 RU environment monitoring system, sensor, automatic
                    sliding door, fire suppression, Precission Air Conditioning and DCIM).',
                ];
                $route = ['product.containment.half-containment', 'product.containment.hot-aisle-containment', 'product.containment.centrinium-containment'];
            @endphp
            @for ($i = 0; $i < 3; $i++)
                <div class="{{ 'product-' . $i }}"><x-product.box title="{{ $title[$i] }}" desc="{{ $desc[$i] }}"
                        route="{{ $route[$i] }}" image="{{ 'containment/' . $image[$i] }}" />
                </div>
            @endfor
        </div>
    </div>
    </div>

    <script>
        ScrollReveal().reveal('.image', {
            delay: 750,
            duration: 1000,
            distance: '800px',
            opacity: 1,
            origin: 'right',
        });

        ScrollReveal().reveal('.title', {
            delay: 300,
            duration: 1000,
            distance: '100px',
            origin: 'bottom'
        });

        ScrollReveal().reveal('.desc', {
            delay: 500,
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
        for (let i = 0; i < 9; i++) {
            ScrollReveal().reveal('.item-' + i, {
                delay: 500 + i * 100,
                duration: 1000,
                distance: '100px',
                origin: 'bottom'
            });
        }

        for (let i = 0; i < 3; i++) {
            ScrollReveal().reveal('.product-' + i, {
                delay: 500 + i * 100,
                duration: 1000,
                distance: '100px',
                origin: 'bottom'
            });
        }
    </script>
@endsection
