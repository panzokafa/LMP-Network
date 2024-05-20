<div class="biru-tua pt-5 flex justify-center md:px-16 px-3 xl:pb-20 pb-10 w-full select-none">
    <div class="max-md:w-full">
        <img class="xl:w-44 w-32 h-auto mb-10 md:mx-auto xl:mx-0" src="{{ asset('images/logo2.png') }}" alt="">

        <div class="lg:ml-5 pr-4 pl-3 xl:flex-row flex-col-reverse flex max-xl:items-center xl:gap-44 gap-16 justify">
            <div>
                <div class="opensans md:text-xl text-white mb-4 max-xl:text-center">Connect with us</div>

                <div class="flex items-center max-xl:justify-center gap-5 mb-4">
                    <a href="https://www.facebook.com/profile.php?id=100092982135974" target='_blank'>
                        <img class="lg:w-8 w-7 h-auto cursor-pointer duration-100 hover:scale-125"
                            src="{{ asset('images/sosmed/facebook.png') }}" alt="">
                    </a>
                    <a href="https://www.linkedin.com/company/lmp-networks/" target='_blank'>
                        <img class="lg:w-8 w-7 h-auto cursor-pointer duration-100 hover:scale-125"
                            src="{{ asset('images/sosmed/linkedin.png') }}" alt="">
                    </a>
                    <a href="">
                        <img class="lg:w-8 w-7 h-auto cursor-pointer duration-100 hover:scale-125"
                            src="{{ asset('images/sosmed/twitter.png') }}" alt="">
                    </a>
                    <a href="https://www.instagram.com/lmp.networks/" target='_blank'>
                        <img class="lg:w-8 w-7 h-auto cursor-pointer duration-100 hover:scale-125"
                            src="{{ asset('images/sosmed/instagram.png') }}" alt="">
                    </a>
                </div>

                <div class="inter text-white max-md:text-sm max-md:text-center whitespace-nowrap">
                    © 2023 by Technology Team LMP Networks.</div>
            </div>

            <div class="md:flex-row flex flex-col md:gap-7 poppins text-white text-left w-full">
                <div class="flex md:flex-row flex-col md:gap-32 relative">
                    <div>
                        <div id="homeBtn" onclick="home()"
                            class="flex items-center justify-between relative z-20 biru-tua  max-md:cursor-pointer max-md:duration-100 max-md:hover:px-5">
                            <div class="font-bold py-5 text-lg">Home</div>
                            <i class="fa-solid fa-arrow-right md:hidden"></i>
                        </div>

                        <div id="homeList"
                            class="flex flex-col gap-3 text-sm max-md:px-3 max-md:mb-3 z-10 max-md:hidden duration-100 relative">
                            <a href="{{ route('user.about') }}"
                                class="cursor-pointer hover:text-biru duration-100 max-md:border-b-[1px] max-md:border-white max-md:py-3">
                                About
                            </a>
                            <a href="{{ route('user.solution') }}"
                                class="cursor-pointer hover:text-biru duration-100 max-md:border-b-[1px] max-md:border-white max-md:py-3">
                                Product & Service</a>
                            <a href="{{ route('solution') }}"
                                class="cursor-pointer hover:text-biru duration-100 max-md:border-b-[1px] max-md:border-white max-md:py-3">
                                Solutions</a>
                            <a href="{{ route('partner') }}"
                                class="cursor-pointer hover:text-biru duration-100 max-md:border-b-[1px] max-md:border-white max-md:py-3">
                                Partners</a>
                            <a href="{{ route('contact') }}"
                                class="cursor-pointer hover:text-biru duration-100 max-md:border-b-[1px] max-md:border-white max-md:py-3">
                                Contact</a>
                            <a href="{{ route('support') }}"
                                class="cursor-pointer hover:text-biru duration-100 max-md:py-3">
                                Support</a>

                        </div>
                    </div>

                    <div class="md:min-h-full md:w-[1px] w-full h-[1px] bg-[#D9D9D9]"></div>
                </div>

                <div class="flex max-md:flex-col md:gap-32">
                    <div>
                        <div id="productBtn" onclick="product()"
                            class="flex items-center justify-between relative z-20 biru-tua  max-md:cursor-pointer max-md:duration-100 max-md:hover:px-5">
                            <div class="font-bold py-5 text-lg">Product</div>
                            <i class="fa-solid fa-arrow-right md:hidden"></i>

                        </div>

                        <div id="productList"
                            class="flex flex-col gap-3 text-sm max-md:px-3 max-md:mb-3 z-10 max-md:hidden duration-100 relative">
                            <a href="{{ route('network') }}"
                                class="cursor-pointer hover:text-biru duration-100 max-md:border-b-[1px] max-md:border-white max-md:py-3">
                                LMP Networks
                            </a>
                            <a href="{{ route('centrinium') }}"
                                class="cursor-pointer hover:text-biru duration-100 max-md:border-b-[1px] max-md:border-white max-md:py-3">
                                LMP Centrinium
                            </a>
                            <a href="{{ route('energy') }}"
                                class="cursor-pointer hover:text-biru duration-100 max-md:border-b-[1px] max-md:border-white max-md:py-3">
                                LMP Renewable Energy
                            </a >
                            <a href="{{route('nex-t')}}"
                                class="cursor-pointer hover:text-biru duration-100 max-md:border-b-[1px] max-md:border-white max-md:py-3">
                                LMP Nex-T Edge DC 360
                            </a >
                            <a href="{{route('polymer')}}"
                                class="cursor-pointer hover:text-biru duration-100 max-md:border-b-[1px] max-md:border-white max-md:py-3">
                                LMP Polymer
                            </a >
                            <a href="{{route('learning')}}" class="cursor-pointer hover:text-biru duration-100 max-md:py-3">
                                LMP Service
                            </a>

                        </div>
                    </div>

                    <div class="md:min-h-full md:w-[1px] w-full h-[1px] bg-[#D9D9D9]"></div>
                </div>

                <div class="flex max-md:flex-col md:gap-32">
                    <div>
                        <div id="aboutBtn" onclick="about()"
                            class="flex items-center justify-between relative z-20 biru-tua  max-md:cursor-pointer max-md:duration-100 max-md:hover:px-5">
                            <div class="font-bold py-5 text-lg">About</div>
                            <i class="fa-solid fa-arrow-right md:hidden"></i>

                        </div>

                        <div id="aboutList"
                            class="flex flex-col gap-3 text-sm max-md:px-3 max-md:mb-3 z-10 max-md:hidden duration-100 relative ">
                            <a href="{{ route('user.about') }}"
                                class="cursor-pointer hover:text-biru duration-100 max-md:border-b-[1px] max-md:border-white max-md:py-3">
                                About LMP</a>
                            <div
                                class="cursor-pointer hover:text-biru duration-100 max-md:border-b-[1px] max-md:border-white max-md:py-3">
                                History LMP</div>
                            <div
                                class="cursor-pointer hover:text-biru duration-100 max-md:border-b-[1px] max-md:border-white max-md:py-3">
                                Events</div>
                            <div
                                class="cursor-pointer hover:text-biru duration-100 max-md:border-b-[1px] max-md:border-white max-md:py-3">
                                News Room</div>
                            <div
                                class="cursor-pointer hover:text-biru duration-100 max-md:border-b-[1px] max-md:border-white max-md:py-3">
                                Lmp Leadership</div>
                            <div
                                class="cursor-pointer hover:text-biru duration-100 max-md:border-b-[1px] max-md:border-white max-md:py-3">
                                Career Opportunity</div>
                            <div class="cursor-pointer hover:text-biru duration-100 max-md:py-3">
                                Ethics & Complience</div>
                        </div>
                        <div class="max-md:h-[1px] bg-[#D9D9D9]"></div>

                    </div>
                </div>


            </div>
        </div>
    </div>
    <script>
        var homeBtn = document.getElementById('homeBtn');
        var homeList = document.getElementById('homeList');

        var productBtn = document.getElementById('productBtn');
        var productList = document.getElementById('productList');

        var aboutBtn = document.getElementById('aboutBtn');
        var aboutList = document.getElementById('aboutList');


        // var viewportWidth = window.innerWidth || document.documentElement.clientWidth;
        // if (viewportWidth < 768) {
        //     homeBtn.addEventListener('click', function() {
        //         homeList.classList.toggle('max-md:hidden')
        //         homeList.classList.toggle('translate-y-[350px]')
        //     })

        //     productBtn.addEventListener('click', function() {
        //         productList.classList.toggle('max-md:hidden')
        //         productList.classList.toggle('translate-y-[350px]')
        //     })

        //     aboutBtn.addEventListener('click', function() {
        //         aboutList.classList.toggle('max-md:hidden')
        //         aboutList.classList.toggle('translate-y-[350px]')
        //     })
        // } else {
        //     null
        // }

        function home() {
            if (window.innerWidth <= 768) {
                homeList.classList.toggle('max-md:hidden')
                // homeList.classList.toggle('translate-y-[350px]')

                console.log('testing')
            } else {
                null
            }

        }

        function product() {
            if (window.innerWidth <= 768) {
                productList.classList.toggle('max-md:hidden')
                // productList.classList.toggle('translate-y-[350px]')
            }

        }

        function about() {
            if (window.innerWidth <= 768) {

                aboutList.classList.toggle('max-md:hidden')
                // aboutList.classList.toggle('translate-y-[350px]')

            }

        }

        function removeList() {
            var viewportWidth = window.innerWidth || document.documentElement.clientWidth;
            if (viewportWidth > 768) {
                homeList.classList.add('max-md:hidden')
                // homeList.classList.add('translate-y-[350px]')
                productList.classList.add('max-md:hidden')
                // productList.classList.add('translate-y-[350px]')
                aboutList.classList.add('max-md:hidden')
                // aboutList.classList.add('translate-y-[350px]')
            } else {
                null
            }
        }
        // console.log(document.documentElement.clientWidth)
        window.onresize = removeList;
    </script>
</div>
