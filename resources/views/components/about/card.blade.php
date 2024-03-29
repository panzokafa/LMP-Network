<div class="flex lg:flex-row flex-col items-center relative py-5">
    <div class="image-1 relative z-20 lg:w-7/12 w-full max-lg:p-4 max-sm:p-2 max-sm:pb-0 biru-muda-2">
        <img class=" w-full" src="{{ asset('images/about/' . $image . '.jpg') }}" alt="">
    </div>
    <div
        class="box-1 h-full biru-muda-2 lg:w-[50%] w-full lg:absolute max-lg:p-5 flex-col justify-center flex lg:pl-48 xl:pr-32 right-0 max-lg:text-center">
        <div class="font-bold sm:text-xl text-lg">
            {{ $title }}
        </div>

        <div class="xl:py-8 sm:py-4 py-3 sm:text-lg inter">
            {{ $desc }}
        </div>


        <a href="{{ route($route) }}"
            class="flex gap-1 border hover:biru duration-300 hover:text-white border-[#2D5290] px-3 py-2 rounded text-biru font-medium poppins max-w-fit cursor-pointer max-lg:mx-auto ">
            Check here
            <div class="">
                ->
            </div>
        </a>
    </div>
</div>
