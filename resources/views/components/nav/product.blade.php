<div
    class="nav-menu rounded-md shadow-lg z-30 absolute opacity-0 invisible w-full inset-x-0  duration-300 xl:top-[80px] top-[84px] bg-white py-12 px-20 text-left flex flex-col items-center">
    <div class="flex flex-wrap justify-between mb-10 w-full gap-x-5 gap-y-10">

        <!--menu network-->
        <div class="">
            <div class="mb-8">
            <a href="{{route('network')}}" class="text-lg text-black font-semibold mb-8">LMP Networks</a>
            </div>
            <div class="flex flex-col gap-4 text-sm">
                <div class="text-biru cursor-pointer link">Cable Fiber Optic <i class="fa-solid fa-caret-right ml-2"></i>
                </div>
                <div class="text-biru cursor-pointer link">Patchcord <i class="fa-solid fa-caret-right ml-2"></i>
                </div>
                <div class="text-biru cursor-pointer link">Enclosure <i class="fa-solid fa-caret-right ml-2"></i>
                </div>
                <div class="text-biru cursor-pointer link">Accessories <i class="fa-solid fa-caret-right ml-2"></i>
                </div>
            </div>
        </div>

        <div class="">
            <div class="mb-8">
            <a href="{{route('centrinium')}}"  class="text-lg text-black font-semibold mb-8">LMP Centrinium</a>
            </div>
            <div class="flex flex-col gap-4 text-sm whitespace-nowrap text-biru">
                <a href="{{route('product.containment.centrinium-containment')}}" class="text-biru cursor-pointer link">Centrinium <i class="fa-solid fa-caret-right ml-2"></i>
                </a>
                <div class="text-biru cursor-pointer flex gap-4 relative max-w-max hover-link">
                    <div> Rack MDC <i class="fa-solid fa-caret-right ml-2"></i>

                    </div>

                    <!--Sub menu Rack-->
                    <div
                    class="link invisible opacity-0 duration-300 border-[0.5px] border-black text-black text-sm absolute left-[120%] whitespace-nowrap z-10 bg-white rounded-lg rounded-tl-none overflow-hidden">
                    <a href="{{ route('product.mdc.top') }}"
                        class="py-2 px-4 border-b hover:bg-[#E6F6FE] duration-300 block">MDC With Top Cooling</a>
                    <a href="{{ route('product.mdc.row-package') }}"
                        class="py-2 px-4 border-b hover:bg-[#E6F6FE]  duration-300 block">MDC With Row Cooling</a>
                    <a href="{{ route('product.mdc.rack-split') }}"
                        class="py-2 px-4 border-b hover:bg-[#E6F6FE]  duration-300 block">MDC With Rack Split
                        Cooling</a>
                    <a href="{{ route('product.mdc.row-split') }}"
                        class="py-2 px-4 hover:bg-[#E6F6FE]  duration-300 block">MDC With Row Split Cooling</a>

                </div>

                </div>

                <div class="text-biru cursor-pointer flex gap-4 relative max-w-max hover-link">
                <div>Outdoor MDC <i class="fa-solid fa-caret-right ml-2"></i>
                    <div
                    class="link invisible opacity-0 duration-300 border-[0.5px] border-black text-black text-sm absolute left-[120%] whitespace-nowrap z-10 bg-white rounded-lg rounded-tl-none overflow-hidden">
                    <a href="{{ route('product.rack.1') }}"
                        class="py-2 px-4 border-b hover:bg-[#E6F6FE] duration-300 block">1-Rack MDC With Rack
                        Cooling</a>
                    <a href="{{ route('product.rack.2') }}"
                        class="py-2 px-4 border-b hover:bg-[#E6F6FE]  duration-300 block">2-Rack MDC With Rack
                        Cooling</a>
                    <a href="{{ route('product.rack.2.row') }}"
                        class="py-2 px-4 border-b hover:bg-[#E6F6FE]  duration-300 block">2-Rack MDC Row With Rack
                        Cooling</a>
                    <a href="{{ route('product.rack.3') }}"
                        class="py-2 px-4 hover:bg-[#E6F6FE]  duration-300 block">3-Rack MDC With Rack Cooling</a>

                </div>
                </div>
                </div>

                {{-- <div class="text-biru cursor-pointer flex gap-4 relative max-w-max hover-link"> --}}
                    <a href="{{route('product.mdc.row')}}"> Row MDC <i class="fa-solid fa-caret-right ml-2"></i>

                    </a>

                    <!--Sub menu Rack-->
                    {{-- <div
                        class="link invisible opacity-0 duration-300 border-[0.5px] border-black text-black text-sm absolute left-[120%] whitespace-nowrap z-10 bg-white rounded-lg rounded-tl-none overflow-hidden">
                        <a href="{{ route('product.mdc.top') }}"
                            class="py-2 px-4 border-b hover:bg-[#E6F6FE] duration-300 block">MDC With Top Cooling</a>
                        <a href="{{ route('product.mdc.row') }}"
                            class="py-2 px-4 border-b hover:bg-[#E6F6FE]  duration-300 block">MDC With Row Cooling</a>
                        <a href="{{ route('product.mdc.rack-split') }}"
                            class="py-2 px-4 border-b hover:bg-[#E6F6FE]  duration-300 block">MDC With Rack Split
                            Cooling</a>
                        <a href="{{ route('product.mdc.row-split') }}"
                            class="py-2 px-4 hover:bg-[#E6F6FE]  duration-300 block">MDC With Row Split Cooling</a>

                    </div> --}}

                {{-- </div> --}}

                <!--menu Container MDC-->
                <div class="text-biru cursor-pointer flex gap-4 relative max-w-max hover-link">
                    <div>Container MDC <i class="fa-solid fa-caret-right ml-2"></i>

                    </div>

                    <!--Sub menu container-->
                    <div
                        class="link invisible opacity-0 duration-300 border-[0.5px] border-black text-black text-sm absolute left-[120%] whitespace-nowrap z-10 bg-white rounded-lg rounded-tl-none overflow-hidden">
                        <a href="{{ route('product.container.10ft') }}"
                            class="py-2 px-4 border-b hover:bg-[#E6F6FE] duration-300 block">10F Container</a>
                        <a href="{{ route('product.container.20ft') }}"
                            class="py-2 px-4 border-b hover:bg-[#E6F6FE]  duration-300 block">20F Container</a>
                        <a href="{{ route('product.container.40ft') }}"
                            class="py-2 px-4 border-b hover:bg-[#E6F6FE]  duration-300 block">40F Container</a>
                        <a href="{{ route('product.container.dual-container') }}"
                            class="py-2 px-4 hover:bg-[#E6F6FE]  duration-300 block">Expandable Container</a>

                    </div>

                </div>
            </div>
        </div>

        <div class="">
            <div class="mb-8">
            <a href="{{route('energy')}}"  class="text-lg text-black font-semibold mb-8">LMP Renewable Energy</a>
            </div>
            <div class="flex flex-col gap-4 text-sm whitespace-nowrap">
                <div class="text-biru cursor-pointer link">Energy Storage <i class="fa-solid fa-caret-right ml-2"></i>
                </div>
                <div class="text-biru cursor-pointer link">Electrolyzer <i class="fa-solid fa-caret-right ml-2"></i>
                </div>
                <div class="text-biru cursor-pointer link">Fuel Cell <i class="fa-solid fa-caret-right ml-2"></i>
                </div>
                <div class="text-biru cursor-pointer link">End To End Hydrogen Solution <i
                        class="fa-solid fa-caret-right ml-2"></i>
                </div>
            </div>
        </div>

        <div class="">
            <div class="mb-8">
            <a href="{{route('polymer')}}"  class="text-lg text-black font-semibold mb-8">LMP Polymer</a>
            </div>
            <div class="flex flex-col gap-4 text-sm whitespace-nowrap">
                <div class="text-biru cursor-pointer link">Roset <i class="fa-solid fa-caret-right ml-2"></i>
                </div>
                <div class="text-biru cursor-pointer link">OTP <i class="fa-solid fa-caret-right ml-2"></i>
                </div>
                <div class="text-biru cursor-pointer link">Access Point IDU Hybrid <i
                        class="fa-solid fa-caret-right ml-2"></i>
                </div>
            </div>
        </div>

        <div class="">
            <div class="mb-8">
            <a href="{{route('learning')}}"  class="text-lg text-black font-semibold mb-8">LMP Services & Learning Center</a>
            </div>
            <div class="flex flex-col gap-4 text-sm whitespace-nowrap">
                <div class="text-biru cursor-pointer link">Project Service <i class="fa-solid fa-caret-right ml-2"></i>
                </div>
                <div class="text-biru cursor-pointer link">UPS & Baterry Service <i
                        class="fa-solid fa-caret-right ml-2"></i>
                </div>
                <div class="text-biru cursor-pointer link">Thermal Service <i class="fa-solid fa-caret-right ml-2"></i>
                </div>
                <div class="text-biru cursor-pointer link">Rack PDU Service <i class="fa-solid fa-caret-right ml-2"></i>
                </div>
                <div class="text-biru cursor-pointer link">DC Power Service <i class="fa-solid fa-caret-right ml-2"></i>
                </div>
                <div class="text-biru cursor-pointer link">Electrical Reliability Service <i
                        class="fa-solid fa-caret-right ml-2"></i>
                </div>
                <div class="text-biru cursor-pointer link">Electrical Safety & Compliance <i
                        class="fa-solid fa-caret-right ml-2"></i>
                </div>
            </div>
        </div>



    </div>
    <div class="w-full">
        <div class="">
            <div class="mb-8">
            <a href="{{route('nex-t')}}"  class="text-lg text-black font-semibold mb-8">LMP Nex-T Edge DC 360</a>
            </div>
            <div class="flex flex-col gap-4 text-sm whitespace-nowrap">
                <div class="text-biru cursor-pointer link">Container MDC<i class="fa-solid fa-caret-right ml-2"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .hover-link:hover .link {
        visibility: visible;
        opacity: 1;
    }
</style>
