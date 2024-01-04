@extends('layouts.frontend')


@section('content')
    <div class="py-12 lg:px-20 sm:px-10 px-5">
        <div class="w-full flex lg:flex-row flex-col justify-between items-center mb-14 gap-12">

            <div class="inter  lg:w-1/2">
                <div class="title xl:text-4xl lg:text-3xl sm:text-2xl text-xl font-bold mb-5">Centrinium Containment
                </div>


                <div class="desc lg:text-xl sm:text-lg mb-5">Containment Data Center Cabinet Capacity 20 racks (Compatible
                    with rack 42 - 45 RU environment monitoring system, sensor, automatic
                    sliding door, fire suppression, Precission Air Conditioning and DCIM).
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
                <img class="relative z-20 mb-5" src="{{ asset('images/product/containment/centrinium-containment.png') }}"
                    alt="">
                <div class="flex gap-10 items-center">
                    <img class="max-lg:scale-75" src="{{ asset('images/product/p3dn.png') }}" alt="">

                    <div class="lg:text-2xl sm:txt-lg">46.99</div>
                </div>
            </div>
        </div>

        <div>
            <div class="title text-biru font-semibold lg:text-3xl sm:text-2xl text-xl mb-8">
                Key Characteristics
            </div>

            <div class="flex flex-col justify-center gap-4 mb-20 lg:mb-12">
                @php
                    $char = [
                        'Monitoring System : Module-level monitoring system +  local touch screen, supporting 3D,
temperature cloud map and asset management, etc',
                        'Cabling System : Row-level cable ladder supports wiring between two columns of racks,
and M-type cabling on the top of the rack supports isolated wiring',
                        'Closed Aisle System : It consists of horizontally expanding modular skylights, supports and
doors, which can be opened automatically.',
                        'Access Door : All-glass door design  electric sliding door  assembly, support  fingerprint +
password +  RFID access control',
                        'Power System : Integrated design of modular UPS and power distribution cabinet, Independent
configuration  is optional',
                        'Server Rack : Standard 19-inch server cabinet, 75% front and rear mesh door through-hole ratio,
static load up to 1800kg',
                        'Cooling System : Row-mount Cooling system with DX or CW, the same appearance
style as the server rack',
                    ];
                @endphp
                @for ($i = 0; $i < 7; $i++)
                    <div class="flex items-center gap-2 text-lg {{ 'item-' . $i }}">
                        <div class="lg:min-h-3  lg:min-w-3 min-w-2 min-h-2 bg-[#A0A0A0] rounded-full"></div>
                        <div class="max-lg:text-sm">{{ $char[$i] }}</div>
                    </div>
                @endfor
            </div>

            <div class="lg:text-3xl sm:text-2xl text-xl font-semibold text-biru mb-7">
                Similar products
            </div>

            <div class="grid lg:grid-cols-2 grid-cols-1 gap-4">
                @php
                    $image = ['half-containment', 'hot-aisle-containment', 'cold-aisle-containment'];
                    $title = ['Half Containment ', 'Hot Aisle Containment', 'Cold Aisle Containment'];
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
                    ];
                    $route = ['product.containment.half-containment', 'product.containment.hot-aisle-containment', 'product.containment.cold-aisle-containment'];
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
