<div class="lg:px-20">
    <div class="lg:w-2/3 lg:mb-20 mb-10">
        <div class="font-semibold lg:text-2xl sm:text-xl text-lg mb-5">• Environmental Preservation</div>

        <div class="first lg:text-xl sm:text-lg">Renewable energy sources, such as wind, solar,
            and hydropower, help preserve the environment by reducing
            greenhouse gas emissions and minimizing air and water pollution.</div>
    </div>

    @php
        $title = ['Sustainability', 'Energy Independence', 'Job Creation', 'Reduced Energy Costs', 'Innovation', 'Energy Efficiency'];

        $desc = [
            'Renewable energy is inexhaustible and can be harnessed
        continuously without depleting natural resources, ensuring
        long-term sustainability.',
            'Utilizing renewable energy reduces reliance on fossil fuels,
        contributing to greater energy independence and security.',
            'The renewable energy sector generates employment
        opportunities, driving economic growth and job creation
        in various fields.',
            'As technology advances and renewable energy
        becomes more accessible, it often leads to reduced
        energy costs for both individuals and businesses.',
            'The pursuit of renewable energy fosters innovation
        and drives advancements in clean energy technologies.',
            'The integration of renewable energy often
        encourages energy efficiency measures and practices.',
        ];
    @endphp

    @for ($i = 1; $i < 7; $i++)
        <div
            class="{{ 'energy-' . $i }} flex lg:flex-row flex-col justify-center items-center w-full md:mb-20 mb-12 {{ $i % 2 == 0 ? 'lg:flex-row-reverse' : '' }}">
            <div class="w-1/2 max-sm:scale-75 flex items-center justify-center max-md:mb-3">
                <img src="{{ asset('images/energy/' . $i . '.png') }}" alt="">
            </div>

            <div class="lg:w-1/2">
                <div class="font-semibold md:text-2xl lg:text-xl text-lg mb-5">• {{ $title[$i - 1] }}</div>

                <div class="lg:text-xl sm:text-lg">{{ $desc[$i - 1] }}</div>
            </div>
        </div>
    @endfor

    <div class="fade lg:text-xl text-biru text-lg relative text-right cursor-pointer w-full">
        <a href="{{route('service')}}" class="cursor-pointer">PRODUCT -></a>
    </div>
    <script>
        ScrollReveal().reveal('.fade', {
            delay: 500,
            duration: 1000,
            opacity: 0,
            distance: '50px',
            origin: 'bottom'
        });
        ScrollReveal().reveal('.first', {
            delay: 600,
            duration: 1000,
            distance: '100px',
            origin: 'bottom'
        });
        for (let i = 1; i < 7; i++) {
            ScrollReveal().reveal('.energy-' + i, {
                delay: 700 + i * 100,
                duration: 1000,
                distance: '100px',
                origin: 'bottom'

            });
        }
    </script>

</div>
