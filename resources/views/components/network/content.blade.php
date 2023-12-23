<div class="lg:px-20">
    <div class="desc lg:text-2xl sm:text-xl text-lg mb-26 lg:w-2/3">
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

    <div class="desc-2 lg:text-2xl sm:text-xl text-lg xl:w-2/3 lg:mb-36 mb-10">
        Patch cords support network applications in main, horizontal and equipment
        distribution areas and are available in low smoke zero halogen (LSZH) rated
        jacket materials to comply with local cabling ordinances. Pre-terminated fiber
        optic pigtails support fusion splice field termination applications.
    </div>

    <div class="flex justify-end text-xl fade">
        <div class="cursor-pointer">product -></div>
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
