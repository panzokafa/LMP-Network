@extends('layouts.app')

@section('css')
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
@endsection

@section('content')
    <div class="min-h-screen flex flex-col items-center justify-center bg-white">
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
            <div class="flex justify-center content-center lg:ml-20">
                <a href="/" class=" flex  lg:block justify-center content-center">
                    <img src="{{ asset('assets/img/LMP_logo.png') }}" alt="LMP" />
                </a>
            </div>


            <div class="mt-10 lg:w-96">
                <form method="POST" action="{{ route('user.register.store') }}">
                    @csrf
                    <div class="flex flex-col mb-5">
                        <label for="name" class="mb-1 text-xs tracking-wide text-black">Full Name</label>
                        <div class="relative">


                            <input id="name" type="text" name="name"
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
                                placeholder="Full Name" />

                        </div>
                        @error('name')
                            <span class="text-red-500 py-2" role="alert">
                                <p class="text-sm">{{ $message }}</p>
                            </span>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-5">
                        <label for="email" class="mb-1 text-xs tracking-wide  text-black">Email Address</label>
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
                        @error('email')
                            <span class="text-red-500" role="alert">
                                <p class="text-sm">{{ $message }}</p>
                            </span>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-6">
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

                    <div class="flex flex-col mb-5">
                        <label for="company" class="mb-1 text-xs tracking-wide text-black">Company Name</label>
                        <div class="relative">


                            <input id="company" type="text" name="company"
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
                                placeholder="Company Name" />

                        </div>
                        @error('company')
                            <span class="text-red-500" role="alert">
                                <p class="text-sm">{{ $message }}</p>
                            </span>
                        @enderror
                    </div>



                    <div class="flex flex-col mb-5">
                        <label for="division" class="mb-1 text-xs tracking-wide text-black">Division</label>
                        <div class="relative">


                            <input id="division" type="text" name="division"
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
                                placeholder="Division" />

                        </div>
                        @error('division')
                            <span class="text-red-500" role="alert">
                                <p class="text-sm">{{ $message }}</p>
                            </span>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-5">
                        <label for="phonenumber" class="mb-1 text-xs tracking-wide text-black">Phone Number</label>
                        <div class="relative">


                            <input id="phonenumber" type="number" name="phonenumber"
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
                                placeholder="Phone Number" />

                        </div>
                        @error('phonenumber')
                            <span class="text-red-500 py-2" role="alert">
                                <p class="text-sm">{{ $message }}</p>
                            </span>
                        @enderror
                    </div>


                    <div class="flex flex-col mb-5">
                        <label for="linkedin" class="mb-1 text-xs tracking-wide text-black">Linkedin</label>
                        <div class="relative">


                            <input id="linkedin" type="text" name="linkedin"
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
                                placeholder="Linkedin" />

                        </div>
                        @error('linkedin')
                            <span class="text-red-500" role="alert">
                                <p class="text-sm">{{ $message }}</p>
                            </span>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-5">
                        <label for="instagram" class="mb-1 text-xs tracking-wide text-black">instagram</label>
                        <div class="relative">


                            <input id="instagram" type="text" name="instagram"
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
                                placeholder="instagram" />

                        </div>
                        @error('instagram')
                            <span class="text-red-500" role="alert">
                                <p class="text-sm">{{ $message }}</p>
                            </span>
                        @enderror
                    </div>

                    <div class="flex w-full">
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
                            <span class="mr-2 ">Sign Up</span>

                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="flex  ">
            <div
                class="
            inline-flex

            text-gray-700
            font-medium
            text-xs text-center
          ">
                <span class="mr-16">already have an account?
                    <a href="{{ route('user.login') }}" class="text-xs  text-biru ">Sign in here</a></span>
            </div>
        </div>

    </div>
@endsection
