@extends('layouts.frontend')

@section('content')
    <div class="py-12 lg:px-20 sm:px-10 px-5 ">
        <div class=" text-2xl lg:text-4xl font-semibold text-black">Search</div>
        <div class=" my-8 w-full mx-auto relative text-gray-600">
            <form action="/search" class="form-inline" method="GET">
            <input class="border-2 border-gray-300 bg-white w-full  h-12 px-5 pr-16 rounded-md text-sm focus:outline-none"
                type="search" value="{{ isset($search) ? $search : '' }}" name="search" placeholder="Enter Keyword Search" >
            <button type="submit" value="search"
                class="absolute right-0 top-0 mt-0 mr-0 biru hover:bg-blue-700 text-white  py-3 px-12 border-black dark:bg-biru rounded-e-md ">
                <div class=" text-white">Search</div>
            </button>
            </form>
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
                        {!! $product->desc !!}
                    </div>
                </div>

                <img class="w-1/3" src="{{ asset('image/'.$product->image) }}" alt="">
            </a>
            @endforeach


        </div>
    </div>


@endsection
