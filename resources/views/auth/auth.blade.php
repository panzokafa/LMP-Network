@extends('layouts.app')

@section('css')
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
@endsection

@section('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

    <script>
        $(".closealertbutton").click(function(e) {
            // $('.alertbox')[0].hide()
            // e.preventDefault();
            pid = $(this).parent().parent().hide(500)

            // $(".alertbox", this).hide()
        })
    </script>
@endsection

@section('content')
    <div class="min-h-screen flex flex-col items-center justify-center bg-white">
        @if (Session::has('success'))
            <div class="p-4 absolute right-0 top-0 w-64" id="alertbox">
                <div class="container bg-green-500 flex items-center text-white text-sm font-bold px-4 py-3 relative"
                    role="alert">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                    </svg>
                    <p>{{ session()->get('success') }}</p>

                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3 closealertbutton">
                        <svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </div>
            </div>
        @endif
        <div
            class="
            flex flex-col
            px-4
            sm:px-6
            md:px-8
            lg:px-10
            py-3
            lg:w-96
            md:w-96
             w-80
        ">
        <div class="flex justify-center content-center lg:ml-20 mb-6">
            <a href="/" class=" flex  lg:block justify-center content-center">
                <img src="{{ asset('images/logo1.png') }}" alt="LMP" />
            </a>
        </div>

            <div class="mt-10 lg:w-96">
                <form method="POST" action="{{ route('user.login.auth') }}">
                    @csrf
                    <div class="flex flex-col mb-5">
                        <label for="email" class="mb-1 text-xs tracking-wide  text-black ">Email Address</label>
                        <div class="relative ">


                            <input id="email" type="email" name="email"
                                class="
                                bg-gray-200
                                text-sm
                                placeholder-gray-500
                                pl-3
                                pr-4
                                rounded

                                w-full
                                py-2
                                focus:outline-none focus:bg-gray-300
                                "
                                placeholder="Email" />

                        </div>
                        @error('credentials')
                            <span class="text-red-500" role="alert">
                                <p class="text-sm">{{ $message }}</p>
                            </span>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-2">
                        <label for="password" class="mmb-1 text-xs tracking-wide text-black">Password</label>
                        <div class="relative">


                            <input id="password" type="password" name="password"
                                class="
                                  bg-gray-200
                                    text-sm
                                    placeholder-gray-500
                                    pl-3
                                    pr-4
                                    rounded

                                    w-full
                                    py-2
                                    focus:outline-none focus:bg-gray-300"
                                placeholder="Password" />
                        </div>
                        @error('password')
                            <span class="text-red-500 py-2" role="alert">
                                <p class="text-sm">{{ $message }}</p>
                            </span>
                        @enderror
                    </div>

                    <div class="flex justify-end ">
                        <div
                            class="
                        inline-flex
                        items-center
                        text-gray-700
                        font-medium
                        text-xs text-center
                      ">
                                <a href="#" class="text-xs  text-biru">Forgot Password ?
                                    </a>
                        </div>
                    </div>

                    <div class="flex w-full mt-6">
                        <button type="submit"
                            class="
                  flex
                  mt-2
                  items-center
                  justify-center
                  focus:outline-none
                  text-white text-sm
                  sm:text-base
                  bg-biru
                  rounded
                  py-2
                  w-full
                  transition
                  duration-150
                  ease-in
                ">
                            <span class="mr-2 uppercase">Sign In</span>

                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="flex justify-center items-center ">
            <div
                class="
            inline-flex
            items-center
            text-gray-700
            font-medium
            text-xs text-center
          ">
                <span class="mr-16">Don't have an account?
                    <a href="{{ route('user.register') }}" class="text-xs  text-biru">Sign Up here
                        </a></span>
            </div>
        </div>
    </div>
@endsection
