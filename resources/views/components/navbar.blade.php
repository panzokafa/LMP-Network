<div class="flex py-5 px-20 justify-between shadow-lg">
    <div class="w-24 h-auto">
        <img src="{{ asset('images/logo1.png') }}" alt="">
    </div>

    <div class="flex poppins font-semibold items-center gap-12">
        <div class="cursor-pointer">About</div>
        <div class="cursor-pointer">Product & Service</div>
        <div class="cursor-pointer">Solution</div>
        <div class="cursor-pointer">Partner</div>
        <div class="cursor-pointer">Contact</div>
        <div class="cursor-pointer">Support</div>
    </div>


    @guest
    <div class="poppins font-semibold flex gap-7 items-center">
        <div class="cursor-pointer">Login</div>
        <div class="cursor-pointer py-2 px-3 rounded-md text-white biru">Sign up</div>
    </div>
    @else

    <div class="poppins font-semibold flex gap-3 items-center">
        {{-- <img src={{ auth()->user()->profile_picture }} alt=""> --}}
        <div class="w-10 h-auto brand-image img-circle elevation-3 ">
            <img src="{{ asset('images/Avatar.png') }}" class="brand-image img-circle elevation-3 rounded-full" alt="">
        </div>
        <p class=" font-light">{{ auth()->user()->name }}</p>



    </div>
    @endguest

</div>
