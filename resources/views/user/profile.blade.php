<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</div>
@extends('layouts.frontend')


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
    {{-- @include('user.p-edit') --}}
    <div
        class="flex lg:flex-row flex-col justify-center items-center lg:gap-36 gap-12 py-20 xl:px-28 lg:px-28 sm:px-10 px-5">

        <div class="">
            @php($profile_picture = auth()->user()->profile_picture)
            <img src="@if ($profile_picture == null) {{ asset('images/Person.png') }} @else {{ asset('image/' . auth()->user()->profile_picture) }} @endif  "
                class="lg:h-[340px] lg:w-[340px] h-[150px] w-[150px] lg:rounded rounded-full mb-8 " id='profile_picture'
                alt="PP">

            {{-- @include('components.modal') --}}
            <a href="{{ route('user.edit', auth()->user()->id) }}">
                <button
                    class=" hover:biru-tua hover:border-[#112645] hover:text-white duration-300 w-full py-4 max-sm:hidden font-bold text-center border-2 rounded-md border-[#888888] ">
                    <div data-toggle="modal" data-target="#ModalEdit">

                        Change Profile
                    </div>
                </button>
            </a>

        </div>

        <div class="xl:w-1/3 lg:w-1/2">
            <div
                class=" lg:justify-start justify-center text-center font-bold lg:text-2xl text-lg lg:mb-10 mb-10 flex flex-row lg:gap-24 ">
                Personal Data
            </div>

            <div class="flex flex-col gap-7 lg:text-lg">
                <div class="flex justify-between items-center gap-5">
                    <div class="font-semibold">
                        Full Name
                    </div>
                    <div class="text-left w-1/2">
                        <p>{{ auth()->user()->name }}</p>
                    </div>
                </div>

                <div class="flex justify-between items-center gap-5">
                    <div class="font-semibold">
                        Email Address
                    </div>
                    <div class="text-left w-1/2">
                        <p>{{ auth()->user()->email }}</p>
                    </div>
                </div>

                <div class="flex justify-between items-center gap-5">
                    <div class="font-semibold">
                        Company Name
                    </div>
                    <div class="text-left w-1/2">
                        <p>{{ auth()->user()->company }}</p>
                    </div>
                </div>

                <div class="flex justify-between items-center gap-5">
                    <div class="font-semibold">
                        Division
                    </div>
                    <div class="text-left w-1/2">
                        <p>{{ auth()->user()->division }}</p>
                    </div>
                </div>

                <div class="flex justify-between items-center gap-5">
                    <div class="font-semibold">
                        Number
                    </div>
                    <div class="text-left w-1/2">
                        <p>{{ auth()->user()->phone_number }}</p>
                    </div>
                </div>

                <div class="flex justify-between items-center gap-5">
                    <div class="font-semibold">
                        Linkedin
                    </div>
                    <div class="text-left w-1/2">
                        <p>{{ auth()->user()->linkedin }}</p>
                    </div>
                </div>

                <div class="flex justify-between items-center gap-5">
                    <div class="font-semibold">
                        Instagram
                    </div>
                    <div class="text-left w-1/2">
                        <p>{{ auth()->user()->instagram }}</p>
                    </div>
                </div>
            </div>

        </div>
        <a href="{{ route('user.edit', auth()->user()->id) }}"
            class="w-full hover:biru-tua hover:border-[#112645] text-base hover:text-white duration-300 py-3 sm:hidden font-bold text-center border-2 rounded-md border-[#888888] ">
            <div data-toggle="modal" data-target="#ModalEdit">

                Change Profile
            </div>
        </a>

    </div>
@endsection
