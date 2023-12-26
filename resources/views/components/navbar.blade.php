<div id="normal"
    class="flex py-5 xl:px-20 md:px-12 px-6 justify-between items-center fixed z-50 bg-white shadow-lg w-full">
    <a href="{{ route('user.home')}}" class="w-24 h-auto">
        <img src="{{ asset('images/logo1.png') }}" alt="">
    </a>


    <div class="poppins font-semibold items-center gap-12 text-sm xl:text-base text-center lg:flex hidden">
        <a href="{{ route('user.about')}}" class="cursor-pointer">About</a>
        <a href="{{ route('service')}}" class="cursor-pointer">Product & Service</a>
        <a href="{{ route('solution')}}" class="cursor-pointer">Solution</a>
        <a href="{{ route('partner')}}" class="cursor-pointer">Partner</a>
        <a href="{{ route('contact')}}" class="cursor-pointer">Contact</a>
        <a href="{{ route('support')}}" class="cursor-pointer">Support</a>
    </div>

    @guest
    <div class="poppins font-semibold flex gap-7 items-center">
        <a href="{{ route('user.login')}}" class="cursor-pointer">Login</a>
        <a href="{{ route('user.register')}}" class="cursor-pointer py-2 px-3 rounded-md text-white biru">Sign up</a>

        <i id="navBtn" class="text-xl cursor-pointer fa-solid fa-bars lg:hidden block lg:text-black "></i>

    </div>
    @else
    <div class="flex items-center gap-2 max-lg:gap-5">
    <a href="{{ route('user.profile')}}"  class="poppins font-semibold flex gap-3 items-center ">
        {{-- <img src={{ auth()->user()->profile_picture }} alt=""> --}}
        <div class="w-10 h-auto brand-image img-circle elevation-3 ">
            @php($profile_picture = auth()->user()->profile_picture)
            <img src="@if($profile_picture == null) {{ asset('images/Person.png' ) }} @else {{ asset('storage/picture/'.auth()->user()->profile_picture ) }} @endif" class="brand-image img-circle elevation-3 rounded-full" alt="">
        </div>

        <p class="max-lg:hidden font-light">{{ auth()->user()->name }}</p>

    </a>
    <i id="navBtn" class="text-xl cursor-pointer fa-solid fa-bars lg:hidden block lg:text-black "></i>
</div>
    @endguest
</div>


<div id="nav" class="w-[100vw] h-[100vh] left-0 right-0 bottom-0 top-0 z-50 hidden">
    <div class="h-full w-full absolute bg-black opacity-90 z-10"></div>

    <div class="flex py-5 xl:px-20 md:px-12 px-6 pr-10 justify-between items-center relative z-20 mb-14 z-20">
        <div class="md:w-24 w-20 h-auto">
            <img src="{{ asset('images/logo1.png') }}" alt="">
        </div>

        @guest
        <div class="poppins font-semibold flex gap-7 items-center text-center">
            <a href="{{ route('user.login')}}" class="cursor-pointer text-white">Login</a>
        <a href="{{ route('user.register')}}" class="cursor-pointer py-2 px-3 rounded-md text-white biru">Sign up</a>

            <i id="x" class="fa-solid fa-xmark text-2xl text-white cursor-pointer"></i>
        </div>
        @else
        <div class="">
            <i id="x" class="fa-solid fa-xmark text-2xl text-white cursor-pointer"></i>
        </div>
        @endguest
    </div>

    <div class="relative z-20 px-8 pr-12 flex flex-col ">
        <div
            class="flex justify-between items-center py-5 text-white font-bold border-b-[1px] hover:bg-white cursor-pointer duration-100 hover:px-5 hover:text-black">
            <div class="">About</div>
            <i class="fa-solid fa-arrow-right "></i>
        </div>

        <div
            class="flex justify-between items-center py-5 text-white font-bold border-b-[1px]  hover:bg-white cursor-pointer duration-100 hover:px-5 hover:text-black">
            <div class="">Product & Service</div>
            <i class="fa-solid fa-arrow-right "></i>
        </div>

        <div
            class="flex justify-between items-center py-5 text-white font-bold border-b-[1px]  hover:bg-white cursor-pointer duration-100 hover:px-5 hover:text-black">
            <div class="">Solution</div>
            <i class="fa-solid fa-arrow-right "></i>
        </div>

        <div
            class="flex justify-between items-center py-5 text-white font-bold border-b-[1px]  hover:bg-white cursor-pointer duration-100 hover:px-5 hover:text-black">
            <div class="">Partners</div>
            <i class="fa-solid fa-arrow-right "></i>
        </div>

        <div
            class="flex justify-between items-center py-5 text-white font-bold border-b-[1px]  hover:bg-white cursor-pointer duration-100 hover:px-5 hover:text-black">
            <div class="">Contact</div>
            <i class="fa-solid fa-arrow-right "></i>
        </div>

        <div
            class="flex justify-between items-center py-5 text-white font-bold border-b-[1px]  hover:bg-white cursor-pointer duration-100 hover:px-5 hover:text-black">
            <div class="">Support</div>
            <i class="fa-solid fa-arrow-right "></i>
        </div>
    </div>
    <script>
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
    </script>
</div>

