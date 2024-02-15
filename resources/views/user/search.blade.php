@extends('layouts.frontend')

@section('content')
    <div class="py-12 lg:px-20 sm:px-10 px-5 ">
        <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
        <div class=" my-28 relative mx-auto w-1/3 text-gray-600">
            <input class="border-2 border-gray-300 bg-white w-full  h-14 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                type="search" name="search" placeholder="Enter Keyword Search">
            <button type="submit"
                class="absolute right-0 top-0 mt-0 mr-0 bg-blue-500 hover:bg-blue-700 text-white  py-5 px-4 border-black dark:bg-biru rounded-e-lg ">
                <svg class="text-white h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                    viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                    width="512px" height="512px">
                    <path
                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                </svg>
            </button>
        </div>

        <div class="grid lg:grid-cols-2 grid-cols-1 gap-4">
            @foreach ($products as $product)

            <a href="{{route('user.product', $product->id)}}"
                class="flex hover:border-[#A8D5FB] border-4 border-white duration-300 justify-center items-center bg-[#DDEDFB] px-6 py-8 cursor-pointer h-full">
                <div>
                    <div class="lg:text-xl sm:text-lg  mb-5 font-medium">
                        {{ $product->name}}
                    </div>

                    <div class="lg:text-base sm:text-base text-xs">
                        {{ $product->desc}}
                    </div>
                </div>

                <img class="w-1/3" src="{{ asset('image/'.$product->image) }}" alt="">
            </a>
            @endforeach


        </div>
    </div>


@endsection
