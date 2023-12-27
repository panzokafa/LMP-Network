<a href="{{ route($route) }}" class="flex justify-center items-center bg-[#DDEDFB] lg:px-12 px-6 py-8 cursor-pointer">
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
