<div class="flex flex-wrap lg:gap-36 gap-10 justify-center items-center lg:mb-14">
    @php
        $text = ['Centrinium™️ UHD Series 1U 144F - LMP Networks®', 'Centrinium™ UHD Series 2U – 288F', 'Centrinium™ UHD Series 4U – 576F'];
    @endphp
    @for ($i = 1; $i < 3; $i++)
        <div class="{{ 'polymer-' . $i }} text-center flex flex-col items-center">
            <img class="mb-4 max-lg:scale-75" src="{{ asset('images/polymer/' . $i . '.png') }}" alt="">
            <div class="text-medium mb">
                {{ $i > 1 ? 'LMP Polymer® Access Point IDU Hybrid ' : 'LMP Polymer® Roset LMP' }}
            </div>

        </div>
    @endfor
    <div>
        <div class="desc-2 xl:text-2xl lg:text-xl sm:text-lg xl:w-full lg:mb-36 mb-10">
            This new business line strengthen our core business and deliver more comprehensive solution to our
            customer.
        </div>

        <div class="fade lg:text-xl text-biru text-lg relative text-right cursor-pointer w-full">
            <a href="{{route('service')}}" class="cursor-pointer">PRODUCT -></a>
        </div>
    </div>

    <script>
        ScrollReveal().reveal('.fade', {
            delay: 500,
            duration: 1000,
            opacity: 0,
            distance: '50px',
            origin: 'bottom'
        });
        ScrollReveal().reveal('.desc-2', {
            delay: 350,
            duration: 1000,
            distance: '100px',
            origin: 'bottom'
        });
        for (let i = 1; i < 3; i++) {
            ScrollReveal().reveal('.polymer-' + i, {
                delay: 700 + i * 100,
                duration: 1000,
                distance: '100px',
                origin: 'bottom'

            });
        }
    </script>
</div>
