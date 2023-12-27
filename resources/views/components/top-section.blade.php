<div class="w-full flex lg:flex-row flex-col-reverse justify-between items-center sm:mb-36 mb-28">

    <div class="inter lg:pl-20 lg:w-1/2 text-center lg:text-left 2xl:mt-0 relative lg:top-10 top-14">

        <div class="max-w-max max-lg:mx-auto title">
            <div class="2xl:text-4xl lg:text-3xl sm:text-2xl text-xl  font-bold max-lg:px-10 ">
                {{ $title }}
            </div>

            <div class="h-1 lg:w-[115%] w-full biru sm:my-3 my-2 max-lg:mb-5"></div>

        </div>

        <div class="lg:text-xl sm:text-lg lg:mb-3 sm:leading-8 lg:leading-7 desc">{{ $desc }}
        </div>
    </div>


    <div class="flex relative lg:w-2/5 h-full relative max-lg:left-3 image-1">
        <div class="flex items-center justify-center w-full">
            <img class="relative z-20 w-full" src="{{ asset('images/' . $image) }}" alt="">
        </div>
        <div class="absolute w-full h-full border-2 border-[#3F73AE] lg:top-7 lg:right-7 right-3 top-3 right75">

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

        ScrollReveal().reveal('.title', {
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
    </script>
</div>
