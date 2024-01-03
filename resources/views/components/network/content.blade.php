<div class="lg:px-20">
    <div class="desc xl:text-2xl lg:text-xl sm:text-lg mb-26 lg:w-full">
        Provide interconnect and cross-connect of applications over installations
        in entrance facilities, telecommunications rooms, data center and at the desk.
    </div>

    <div class="flex flex-wrap lg:gap-36 gap-10 justify-center items-center lg:mb-28 mb-14">
        @php
            $text = ['Single Mode Patchcord Jumper', 'Multi Mode OM3 Jumper', 'Multi Mode OM4 Jumper'];
        @endphp
        @for ($i = 1; $i < 4; $i++)
            <div class="text-center {{ 'content-' . $i }}">
                <img src="{{ asset('images/network/' . $i . '.png') }}" alt="">

                <div class="text-medium mb">LMP Networks®</div>
                <div class="text-medium mb ">{{ $text[$i - 1] }}</div>
                <div>LC-LC</div>

            </div>
        @endfor
    </div>

    <a class="desc-2 xl:text-2xl lg:text-xl sm:text-lg xl:w-full lg:mb-36 mb-10 block">
        Patch cords support network applications in main, horizontal and equipment
        distribution areas and are available in low smoke zero halogen (LSZH) rated
        jacket materials to comply with local cabling ordinances. Pre-terminated fiber
        optic pigtails support fusion splice field termination applications.
    </a>

    <div class="flex text-biru justify-end lg:text-xl text-lg fade">
        <a href="{{route('service')}}" class="cursor-pointer">PRODUCT -></a>
    </div>

    <script>
        ScrollReveal().reveal('.desc-2', {
            delay: 350,
            duration: 1000,
            distance: '100px',
            origin: 'bottom'
        });
        ScrollReveal().reveal('.fade', {
            delay: 500,
            duration: 1000,
            opacity: 0,
            distance: '50px',
            origin: 'bottom'
        });
        for (let i = 1; i < 4; i++) {
            ScrollReveal().reveal('.content-' + i, {
                delay: 700 + i * 100,
                duration: 1000,
                distance: '100px',
                origin: 'bottom'

            });
        }
    </script>
