<a href="{{ route($route)}}"
    class="flex hover:border-[#A8D5FB] border-4 border-white duration-300 justify-center items-center bg-[#DDEDFB] px-6 py-8 cursor-pointer h-full">
    <div>
        <div class="lg:text-xl sm:text-lg  mb-5 font-medium">
            {{ $title }}
        </div>

        <div class="lg:text-base sm:text-base text-xs">
            {{ $desc }}
        </div>
    </div>

    <img class="w-1/2" src="{{ asset('images/product/' . $image . '.png') }}" alt="">
</a>


{{-- <a href="{{ route($route) }}"
    class="flex justify-center items-center bg-[#DDEDFB] lg:px-12 sm:px-10 px-5 px-6 py-8 cursor-pointer sm:h-[50vh] h-[40vh] gap-5">
    <div>
        <div class="lg:text-xl sm:text-lg  mb-5 font-medium">
            {{ $title }}
        </div>

        <div class="lg:text-base sm:text-base text-xs">
            {{ $desc }}
        </div>
    </div>

    <img class="xl:w-1/3 lg:w-1/2 sm:w-1/3 w-2/5" src="{{ asset('images/product/' . $image . '.png') }}" alt="">
</a> --}}
