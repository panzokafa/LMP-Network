<div
    class="w-full flex lg:flex-row flex-col-reverse justify-between items-center sm:mb-36 mb-28 max-lg:pt-14  max-lg:px-7">

    <div class="inter lg:pl-20 lg:w-1/2 text-center lg:text-left 2xl:mt-0 relative lg:top-20 top-14">

        <div class="max-w-max max-lg:mx-auto lg:mb-10 mb-5 title">
            <div
                class="2xl:text-4xl xl:text-3xl lg:text-2xl sm:text-xl text-lg  font-bold max-lg:px-10 whitespace-nowrap">
                {{ $title }}
            </div>

            <div class="h-1 lg:w-[130%] w-full biru sm:my-3 my-2"></div>

            <div class="2xl:text-4xl xl:text-3xl lg:text-2xl sm:text-xl text-lg font-bold max-lg:px-10">
                {{ $subTitle }}
            </div>

        </div>

        <div class="desc lg:text-xl sm:text-lg lg:mb-3 sm:leading-8 lg:leading-7 mb-5">{{ $desc }}
        </div>
        <div class="text lg:text-xl sm:text-lg lg:mb-3 sm:leading-8 lg:leading-7">{{ $text }}
        </div>
    </div>


    <div class="flex relative lg:w-2/5 h-full relative max-lg:left-3 image-1">
        <div class="flex items-center justify-center w-full">
            <div class="absolute z-30 p-10">
                <div class="bruno xl:text-xl lg:text-2xl sm:text-xl text-lg text-white lg:mb-3 mb-2 text-center px-5">
                    {{ $theme }}
                </div>
                <div class="w-full relative sm:h-1 h-0.5 bg-white"></div>
            </div>
            <img class="relative z-20 w-full" src="{{ asset('images/' . $image . '.jpg') }}" alt="">
        </div>
        <div class="absolute w-full h-full bg-[#E6F6FE] sm:top-8 sm:right-8 top-5 right-5">

        </div>
    </div>
</div>
