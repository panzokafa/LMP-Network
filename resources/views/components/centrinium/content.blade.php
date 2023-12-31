<div class="lg:px-20">
    <div class="desc-2 lg:text-2xl md:text-xl sm:text-lg mb-24 lg:w-full">
        Centrinium™️ Rack Mount Drawer Indoor Fiber Enclosure ensures network reliability by housing, organizing,
        managing and protecting up to 144 fibre optic cable, terminations, splices, connectors and patch cords using
        12 Modules Cassette adapter panels.
    </div>

    <div class="flex flex-wrap lg:gap-20 gap-10 justify-center items-center lg:mb-28 mb-14">
        @php
            $text = ['Centrinium™️ UHD Series 1U 144F - LMP Networks®', 'Centrinium™ UHD Series 2U – 288F', 'Centrinium™ UHD Series 4U – 576F'];
        @endphp
        @for ($i = 1; $i < 4; $i++)
            <div class="text-center flex flex-col items-center {{ 'centrinium-' . $i }}">
                <img class="mb-4" src="{{ asset('images/centrinium/' . $i . '.png') }}" alt="">

                <div class="text-sm mb">{{ $text[$i - 1] }}</div>
                <div class="text-sm mb">{{ $i > 1 ? '48 Modules adapter panels. MPO - 6 LC DX Adapter' : '' }}
                </div>

            </div>
        @endfor
    </div>

    <div class="desc-2 font-medium lg:text-2xl text-lg text-center mb-14">
        There are two type of module, Pre-conn type for MPO – LC and splice type for splicing method.
    </div>

    <div class="desc-2 xl:text-2xl lg:text-xl sm:text-lg xl:w-full lg:mb-36 mb-10">
        This solution makes it easier for network architects to design networks according to their needs
        Because of this versatility, the enclosure is able to serve as a transition from backbone cabling to
        distribution switching, an interconnect to active equipment, or as a cross-connect or interconnect
        in a main or horizontal distribution area. Users can even easily access the fibres through front
        pull out Modules.
    </div>

    <div class="flex text-biru justify-end lg:text-xl text-lg fade">
        <a href="{{route('service')}}" class="cursor-pointer">PRODUCT -></a>
    </div>
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
        ScrollReveal().reveal('.centrinium-' + i, {
            delay: 700 + i * 100,
            duration: 1000,
            distance: '100px',
            origin: 'bottom'

        });
    }
</script>
