@extends('layouts.frontend')


@section('content')
    <div class="py-12 lg:px-20 sm:px-10 px-5">
        <div class="w-full flex lg:flex-row flex-col justify-between items-center mb-14 gap-12">

            <div class="inter  lg:w-1/2">
                <div class="xl:text-4xl lg:text-3xl sm:text-2xl text-xl font-bold mb-5">{{ $product->name }}</div>


                <div class="lg:text-xl sm:text-lg mb-5">
                    {{ $product->desc }}
                </div>

                <div class="flex lg:flex-row flex-col lg:gap-7 gap-4  items-center">
                    <div
                        class="font-semibold cursor-pointer hover:bg-white hover:border-2 hover:text-biru duration-300 hover:border-[#1780BB] border-2 border-[#3F73AE] py-3 px-4 bg-[#3F73AE] text-white rounded-md max-lg:w-full max-lg:text-center">
                        Pre
                        Order</div>
                    <div
                        class="font-semibold cursor-pointer py-3 px-4 biru text-white rounded-md max-lg:w-full max-lg:text-center hover:bg-white hover:border-2 hover:text-biru duration-300 hover:border-[#3F73AE] border-2 border-[#1780BB]">
                        Get Brochure</div>

                </div>
            </div>
            {{-- <div class="relative w-3/5">
                <img class="relative z-20 w-full" src="{{ asset('images/research/1.jpg') }}" alt="">
                <div class="absolute w-full h-full bg-[#E6F6FE] top-8 right-8">

                </div>
            </div> --}}
            <div class="flex items-center xl:justify-center lg:justify-end w-1/2">
                <img class="relative z-20 " src="{{ asset('image/'.$product->image) }}" alt="">
            </div>
        </div>

        <div>
            <div class="text-biru font-semibold lg:text-3xl sm:text-2xl text-xl mb-8">
                Key Characteristics
            </div>

            <div class="flex flex-col justify-center gap-4 mb-20 lg:mb-12">
                @php
                    $char = [
                        'Support global customized services',
                        'Plug and play design, available online in 10 minutes at the fastest',
                        'Cabinet covered with insulation material to prevent condensation',
                        'Fully enclosed design, dust and noise reduction, protection level up to IP55',
                        'Rack-level cooling, cold and hot aisle isolation, high efficiency, the PUE values as low as 1.3',
                        'The front and rear doors of the cabinet are equipped with a 3 in 1 access control system',
                        'Cabinets, power distribution and cooling units have a variety of forms and specifications for flexible application',
                        'Standard 10-inch integrated touch monitor screen, the monitoring system does not take up U space of the cabinet',
                        'Support remote web, APP and centralized  monitoring, support monitoring protocols such as Modbus-TCP, SNMPV1 / V2, BACnet',
                        'The cabinet is equipped with an emergency pop-up door system as standard, which can automatically open the
front and rear doors in the event of a high temperature or fire alarm',
                    ];
                @endphp
                @for ($i = 0; $i < 9; $i++)
                    <div class="flex items-center gap-2 text-lg">
                        <div class="lg:min-h-3  lg:min-w-3 min-w-2 min-h-2 bg-[#A0A0A0] rounded-full"></div>
                        <div class="max-lg:text-sm">{{ $product->char[$i] }}</div>
                    </div>
                @endfor
            </div>

            <div class="lg:text-3xl sm:text-2xl text-xl font-semibold text-biru mb-7">
                Similar products
            </div>

            <div class="grid lg:grid-cols-2 grid-cols-1 gap-7">
                @for ($i = 0; $i < 3; $i++)
                <a href="{{ route('user.product', $product->id)}}"
                class="flex hover:border-[#A8D5FB] border-4 border-white duration-300 justify-center items-center bg-[#DDEDFB] px-6 py-8 cursor-pointer h-full">
                <div>
                    <div class="lg:text-xl sm:text-lg  mb-5 font-medium">
                        {{ $product->name  }}
                    </div>

                    <div class="lg:text-base sm:text-base text-xs">
                        {{ $product->desc}}
                    </div>
                </div>

                <img class="w-1/2" src="{{ asset('image/'.$product->image)}}" alt="">
            </a>
                @endfor
            </div>
        </div>
    </div>
@endsection
