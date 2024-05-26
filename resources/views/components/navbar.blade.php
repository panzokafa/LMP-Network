<div id="normal"
    class="max-lg:py-5 select-none	 flex xl:px-20 md:px-12 px-6  justify-between items-center fixed z-50 bg-white drop-shadow-lg shadow-lg w-full">
    <a href="{{ route('user.home') }}" class="sm:w-24 w-20 h-auto">
        <img src="{{ asset('images/logo1.png') }}" alt="">
    </a>


    <div class="poppins font-medium items-center gap-12 text-sm xl:text-base text-center lg:flex hidden">
        <a href="{{ route('user.about') }}"
            class="{{ Route::currentRouteName() == 'user.about' ? 'text-biru' : 'hover:text-biru' }} xl:py-7 py-8 nav relative h-full max-w-max cursor-pointer duration-300 flex flex-col items-center">
            <div>About</div>
            <div
                class="{{ Route::currentRouteName() == 'user.about' ? 'w-[120%]' : 'garis w-0' }} absolute bottom-0 h-0.5 biru">
            </div>
        </a>

        <a href="{{ route('nex-t') }}"
            class="{{ Route::currentRouteName() == 'nex-t' ? 'text-biru' : 'hover:text-biru' }} xl:py-7 py-8 nav relative h-full max-w-max cursor-pointer duration-300 flex flex-col items-center">
            <div>Nex-T</div>
            <div
                class="{{ Route::currentRouteName() == 'nex-t' ? 'w-[120%]' : 'garis w-0' }} absolute bottom-0 h-0.5 biru">
            </div>
        </a>

        <div
            class="{{ Route::currentRouteName() == 'service' ? 'text-biru' : '' }} nav-hover nav h-full max-w-max cursor-pointer duration-300 flex flex-col items-center">

            <a href="{{ route('user.solution') }}" class="relative">
                <div class="xl:py-7 py-8 hover:text-biru">Product & Solution</div>
                <div
                    class="{{ Route::currentRouteName() == 'service' ? 'w-[120%]' : 'garis w-0' }} absolute right-[-10%] bottom-0 h-0.5 biru">
                </div>
            </a>


            <x-popup   />

            {{-- @foreach ($uhd as $product)
                        <a href="{{ route('user.product', $product->id) }}">
                            <div
                                class="py-2 px-4 border-b hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs">
                                {{ $product->name }}
                            </div>
                        </a>
                    @endforeach --}}

        </div>

        <a href="{{ route('solution') }}"
            class="{{ Route::currentRouteName() == 'solution' ? 'text-biru' : 'hover:text-biru' }} xl:py-7 py-8 nav relative h-full max-w-max cursor-pointer duration-300 flex flex-col items-center">
            <div>Services</div>
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

    <div class="flex flex-row gap-5">
        @guest
            <div class=" poppins font-semibold flex sm:gap-7 gap-4 items-center text-center">
                <a href="{{ route('user.login') }}"
                    class="hidden sm:block max-sm:text-sm cursor-pointer hover:text-biru duration-300">Login</a>
                <a href="{{ route('user.register') }}"
                    class="hidden sm:block max-sm:text-sm relative cursor-pointer py-2 px-3 rounded-md text-white biru hover:bg-white hover:text-biru border-[#1780BB] border-2 duration-300">Sign
                    up</a>

                <i id="navBtn" class="text-xl cursor-pointer fa-solid fa-bars lg:hidden block lg:text-black "></i>

            </div>
        @else
            <div class="  relative flex items-center gap-5 ">
                <div class="poppins font-semibold  gap-3 items-center flex hover-link">
                    {{-- <img src={{ auth()->user()->profile_picture }} alt=""> --}}
                    <div class="w-10 h-auto brand-image img-circle elevation-3 ">
                        @php($profile_picture = auth()->user()->profile_picture)
                        <img src="@if ($profile_picture == null) {{ asset('images/Person.png') }} @else {{ asset('image/' . auth()->user()->profile_picture) }} @endif"
                            class="w-10 h-10 brand-image img-circle elevation-3 rounded-full border-solid border-2 border-sky-600"
                            alt="">
                    </div>
                    @php($name = auth()->user()->name)
                    <p class="max-lg:hidden font-light">{{ strtok($name, ' ') }}</p>
                    <div
                        class="link invisible hidden lg:block  opacity-0 duration-100 border-[0.5px] border-black text-black text-sm absolute w-44 lg:top-[64px]   whitespace-nowrap z-50 bg-white rounded-lg rounded-tl-none overflow-hidden">
                        <a href="{{ route('user.profile') }}"
                            class="py-2 px-4 border-b w-3/4  duration-300 block">Profile</a>
                        <form action="{{ route('user.logout') }}" method="GET">
                            @csrf
                            <button type="submit" class="py-2 px-4 border-b w-1/2 duration-300 block text-red-500">Log
                                out</button>
                        </form>



                    </div>
                </div>

                <div class="lg:hidden ">
                    <i id="navBtn" class="text-xl cursor-pointer fa-solid fa-bars lg:hidden block lg:text-black "></i>
                </div>
            </div>

        @endguest
        <div id="searchBtn"
            class="hidden lg:block h-full max-w-max cursor-pointer duration-1000 flex-col items-center xl:py-7 py-8 hover:text-biru">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
        </div>
        <x-nav.search />

    </div>

</div>

{{-- mobile --}}
<div id="nav" class="w-[100vw] h-[100vh] inset-x-[100%] duration-300 bottom-0 top-0 z-50 fixed">
    <div class="h-full w-full absolute bg-black opacity-90 z-10"></div>

    <div class="flex py-5 xl:px-20 md:px-12 px-6 pr-10 justify-between items-center relative z-20 mb-14">
        <div class="md:w-24 w-20 h-auto">
            <img src="{{ asset('images/logo1.png') }}" alt="">
        </div>
        <div class="flex gap-5 justify-normal">
            @guest
            @else
                <form action="{{ route('user.logout') }}" method="GET">
                    @csrf
                    <button type="submit"
                        class=" mt-5 rounded-sm bg-red-600 lg:block px-4  py-2 text-sm text-white hover:bg-red-500 ">Log
                        out</button>
                </form>
            @endguest

            <i id="x" class=" mt-5 fa-solid fa-xmark text-2xl text-white cursor-pointer"></i>
        </div>
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

        <a href="{{ route('nex-t') }}"
            class="flex justify-between  items-center py-5 text-white font-bold border-b-[1px] hover:bg-white cursor-pointer duration-100 hover:px-5 hover:text-black">
            <div class="">Nex-T</div>
            <i class="fa-solid fa-arrow-right "></i>
        </a>

        <a href="{{ route('user.solution') }}"
            class="flex justify-between items-center py-5 text-white font-bold border-b-[1px]  hover:bg-white cursor-pointer duration-100 hover:px-5 hover:text-black">
            <div class="">Product & Solution</div>
            <i class="fa-solid fa-arrow-right "></i>
        </a>

        <a href="{{ route('solution') }}"
            class="flex justify-between items-center py-5 text-white font-bold border-b-[1px]  hover:bg-white cursor-pointer duration-100 hover:px-5 hover:text-black">
            <div class="">Services</div>
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

        @guest

            <a href="{{ route('user.login') }}"
                class=" text-center justify-center font-medium mt-10 max-sm:text-sm relative cursor-pointer py-2 px-3  text-black white hover:bg-transparent hover:text-white bg-white border-[#fff] border-2 duration-300">Login</a>
            <a href="{{ route('user.register') }}"
                class=" text-center justify-center font-medium mt-3 max-sm:text-sm relative cursor-pointer py-2 px-3  text-white biru hover:bg-transparent hover:text-biru border-[#1780BB] border-2 duration-300">Sign
                up</a>
        @else
        @endguest
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

        .nav-hover:hover .nav-menu {
            opacity: 1;
            visibility: visible;
        }

        .hover-link:hover .link {
            visibility: visible;
            opacity: 1;
        }
    </style>
</div>
