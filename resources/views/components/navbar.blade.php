<div id="normal"
    class="max-lg:py-5 select-none	 flex xl:px-20 md:px-12 px-6  justify-between items-center fixed z-50 bg-white shadow-lg w-full">
    <a href="{{ route('user.home') }}" class="sm:w-24 w-20 h-auto">
        <img src="{{ asset('images/logo1.png') }}" alt="">
    </a>


    <div class="poppins font-semibold items-center gap-12 text-sm xl:text-base text-center lg:flex hidden">
        <a href="{{ route('user.about') }}"
            class="{{ Route::currentRouteName() == 'user.about' ? 'text-biru' : 'hover:text-biru' }} xl:py-7 py-8 nav relative h-full max-w-max cursor-pointer duration-300 flex flex-col items-center">
            <div>About</div>
            <div
                class="{{ Route::currentRouteName() == 'user.about' ? 'w-[120%]' : 'garis w-0' }} absolute bottom-0 h-0.5 biru">
            </div>
        </a>

        <a href="{{ route('service') }}"
            class="{{ Route::currentRouteName() == 'service' ? 'text-biru' : 'hover:text-biru' }} xl:py-7 py-8 nav relative h-full max-w-max cursor-pointer duration-300 flex flex-col items-center">
            <div>Product & Service</div>
            <div
                class="{{ Route::currentRouteName() == 'service' ? 'w-[120%]' : 'garis w-0' }} absolute bottom-0 h-0.5 biru">
            </div>
        </a>

        <a href="{{ route('solution') }}"
            class="{{ Route::currentRouteName() == 'solution' ? 'text-biru' : 'hover:text-biru' }} xl:py-7 py-8 nav relative h-full max-w-max cursor-pointer duration-300 flex flex-col items-center">
            <div>Solution</div>
            <div
                class="{{ Route::currentRouteName() == 'solution' ? 'w-[120%]' : 'garis w-0' }} absolute bottom-0 h-0.5 biru">
            </div>
        </a>

        <a href="{{ route('partner') }}"
            class="{{ Route::currentRouteName() == 'partner' ? 'text-biru' : 'hover:text-biru' }} xl:py-7 py-8 nav relative h-full max-w-max cursor-pointer duration-300 flex flex-col items-center">
            <div>Partner</div>
            <div
                class="{{ Route::currentRouteName() == 'partner' ? 'w-[120%]' : 'garis w-0' }} absolute bottom-0 h-0.5 biru">
            </div>
        </a>


        <a href="{{ route('contact') }}"
            class="{{ Route::currentRouteName() == 'contact' ? 'text-biru' : 'hover:text-biru' }} xl:py-7 py-8 nav relative h-full max-w-max cursor-pointer duration-300 flex flex-col items-center">
            <div>Contact</div>
            <div
                class="{{ Route::currentRouteName() == 'contact' ? 'w-[120%]' : 'garis w-0' }} absolute bottom-0 h-0.5 biru">
            </div>
        </a>


        <a href="{{ route('support') }}"
            class="{{ Route::currentRouteName() == 'support' ? 'text-biru' : 'hover:text-biru' }} xl:py-7 py-8 nav relative h-full max-w-max cursor-pointer duration-300 flex flex-col items-center">
            <div>Support</div>
            <div
                class="{{ Route::currentRouteName() == 'support' ? 'w-[120%]' : 'garis w-0' }} absolute bottom-0 h-0.5 biru">
            </div>
        </a>
    </div>

    @guest
        <div class="poppins font-semibold flex sm:gap-7 gap-4 items-center text-center">
            <a href="{{ route('user.login') }}"
                class="max-sm:text-sm cursor-pointer hover:text-biru duration-300">Login</a>
            <a href="{{ route('user.register') }}"
                class="max-sm:text-sm relative cursor-pointer py-2 px-3 rounded-md text-white biru hover:bg-white hover:text-biru border-[#1780BB] border-2 duration-300">Sign
                up</a>

            <i id="navBtn" class="text-xl cursor-pointer fa-solid fa-bars lg:hidden block lg:text-black "></i>

        </div>
    @else
        <div class="flex items-center gap-2 max-lg:hidden">
            <a href="{{ route('user.profile') }}" class="poppins font-semibold flex gap-3 items-center ">
                {{-- <img src={{ auth()->user()->profile_picture }} alt=""> --}}
                <div class="w-10 h-auto brand-image img-circle elevation-3 ">
                    @php($profile_picture = auth()->user()->profile_picture)
                    <img src="@if ($profile_picture == null) {{ asset('images/Person.png') }} @else {{ asset('storage/picture/' . auth()->user()->profile_picture) }} @endif"
                        class="brand-image img-circle elevation-3 rounded-full border-solid border-2 border-sky-600"
                        alt="">
                </div>

                <p class=" font-light">{{ auth()->user()->name }}</p>

            </a>
        </div>

        <div class="lg:hidden">
            <i id="navBtn" class="text-xl cursor-pointer fa-solid fa-bars lg:hidden block lg:text-black "></i>
        </div>
    @endguest
</div>


<div id="nav" class="w-[100vw] h-[100vh] inset-x-[100%] duration-300 bottom-0 top-0 z-50 fixed">
    <div class="h-full w-full absolute bg-black opacity-90 z-10"></div>

    <div class="flex py-5 xl:px-20 md:px-12 px-6 pr-10 justify-between items-center relative z-20 mb-14 z-20">
        <div class="md:w-24 w-20 h-auto">
            <img src="{{ asset('images/logo1.png') }}" alt="">
        </div>
        @guest

            <div class="poppins font-semibold flex lg:gap-7 gap-4 items-center text-center">
                <a href="{{ route('user.login') }}"
                    class="max-sm:text-sm text-white cursor-pointer hover:text-biru duration-300">Login</a>
                <a href="{{ route('user.register') }}"
                    class="max-sm:text-sm relative cursor-pointer py-2 px-3 rounded-md text-white biru hover:bg-transparent hover:text-biru border-[#1780BB] border-2 duration-300">Sign
                    up</a>

                <i id="x" class="fa-solid fa-xmark text-2xl text-white cursor-pointer"></i>


            </div>
        @else
            <i id="x" class="fa-solid fa-xmark text-2xl text-white cursor-pointer"></i>

        @endguest

    </div>

    <div class="relative z-20 px-8 pr-12 flex flex-col ">
        <a href="{{ route('user.profile') }}"
            class="flex justify-between items-center py-5 text-white font-bold border-b-[1px] hover:bg-white cursor-pointer duration-100 hover:px-5 hover:text-black">
            <div class="">Profile</div>
            <i class="fa-solid fa-arrow-right "></i>
        </a>
        <a href="{{ route('user.about') }}"
            class="flex justify-between items-center py-5 text-white font-bold border-b-[1px] hover:bg-white cursor-pointer duration-100 hover:px-5 hover:text-black">
            <div class="">About</div>
            <i class="fa-solid fa-arrow-right "></i>
        </a>

        <a href="{{ route('service') }}"
            class="flex justify-between items-center py-5 text-white font-bold border-b-[1px]  hover:bg-white cursor-pointer duration-100 hover:px-5 hover:text-black">
            <div class="">Product & Service</div>
            <i class="fa-solid fa-arrow-right "></i>
        </a>

        <a href="{{ route('solution') }}"
            class="flex justify-between items-center py-5 text-white font-bold border-b-[1px]  hover:bg-white cursor-pointer duration-100 hover:px-5 hover:text-black">
            <div class="">Solution</div>
            <i class="fa-solid fa-arrow-right "></i>
        </a>

        <a href="{{ route('partner') }}"
            class="flex justify-between items-center py-5 text-white font-bold border-b-[1px]  hover:bg-white cursor-pointer duration-100 hover:px-5 hover:text-black">
            <div class="">Partners</div>
            <i class="fa-solid fa-arrow-right "></i>
        </a>

        <a href="{{ route('contact') }}"
            class="flex justify-between items-center py-5 text-white font-bold border-b-[1px]  hover:bg-white cursor-pointer duration-100 hover:px-5 hover:text-black">
            <div class="">Contact</div>
            <i class="fa-solid fa-arrow-right "></i>
        </a>

        <a href="{{ route('support') }}"
            class="flex justify-between items-center py-5 text-white font-bold border-b-[1px]  hover:bg-white cursor-pointer duration-100 hover:px-5 hover:text-black">
            <div class="">Support</div>
            <i class="fa-solid fa-arrow-right "></i>
        </a>
    </div>
    {{-- <script>
        // Ambil referensi elemen
        var navBtn = document.getElementById('navBtn');
        var nav = document.getElementById('nav');
        var navNormal = document.getElementById('normal');
        var x = document.getElementById('x');

        // Tambahkan event listener untuk klik
        navBtn.addEventListener('click', function() {
            // Toggle class 'hidden'
            nav.classList.toggle('fixed');
            nav.classList.toggle('hidden');

            navNormal.classList.toggle('fixed');
            navNormal.classList.toggle('hidden');
        });

        x.addEventListener('click', function() {
            // Toggle class 'hidden'
            nav.classList.toggle('hidden');
            nav.classList.toggle('fixed');

            navNormal.classList.toggle('fixed');
            navNormal.classList.toggle('hidden');
        });
    </script> --}}

    <script>
        // Ambil referensi elemen
        var navBtn = document.getElementById('navBtn');
        var nav = document.getElementById('nav');
        var navNormal = document.getElementById('normal');
        var x = document.getElementById('x');

        // Tambahkan event listener untuk klik
        navBtn.addEventListener('click', function() {
            // Toggle class 'hidden'
            nav.classList.add('inset-x-[0]');
            nav.classList.remove('inset-x-[100%]');

            navNormal.classList.toggle('fixed');
            navNormal.classList.toggle('hidden');
        });

        x.addEventListener('click', function() {
            // Toggle class 'hidden'
            nav.classList.remove('inset-x-[0]');
            nav.classList.add('inset-x-[100%]');


            navNormal.classList.toggle('fixed');
            navNormal.classList.toggle('hidden');
        });
    </script>

    <style>
        .nav:hover .garis {
            transition-duration: 300ms;
            width: 120%
        }
    </style>
</div>
