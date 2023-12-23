<div class="flex lg:flex-row flex-col items-center relative py-5">
    <div class="image relative z-20 lg:w-1/2 w-full max-lg:p-4 max-sm:p-2 max-sm:pb-0 biru-muda-2">
        <img class=" w-full" src="{{ asset('images/about/' . $image . '.jpg') }}" alt="">
    </div>
    <div
        class="box h-full biru-muda-2 lg:w-[55%] w-full lg:absolute max-lg:p-5 right-0 flex-col justify-center flex lg:pl-40 lg:pr-20 right-0 max-lg:text-center">
        <div class="font-bold sm:text-xl text-lg">
            LMP {{ $title }}
        </div>

        <div class="xl:py-8 sm:py-4 py-3 sm:text-lg inter">
            {{ $desc }}
        </div>


        <div
            class="border border-[#2D5290] px-3 py-2 rounded text-biru font-medium poppins max-w-fit cursor-pointer max-lg:mx-auto ">
            Check here
        </div>
    </div>

    <script>
        ScrollReveal().reveal('.image', {
            delay: 350,
            duration: 1000,
            distance: '1000px',
            opacity: 1,
            origin: 'left',
        });

        ScrollReveal().reveal('.box', {
            delay: 350,
            duration: 1000,
            distance: '1000px',
            opacity: 1,
            origin: 'right',
        });
    </script>
</div>
