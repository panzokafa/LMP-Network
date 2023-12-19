<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</div>
@extends('layouts.frontend')


@section('content')
    {{-- @include('components.modal') --}}
    <div class="flex justify-ceenter items-center gap-24 max-w-max py-20 px-44">

        <div>

            <img src="{{ asset('storage/profil'.auth()->user()->profile_picture ) }} "
                class="h-[340px] w-[340px] rounded mb-8" id='profile_picture' alt="">

            {{-- @include('components.modal') --}}

            <button class="w-full py-4 font-bold text-center border rounded-md border-[#888888] open_modal">
                <a href="{{ route('user.edit', auth()->user()->id) }}" data-toggle="modal" data-target="#ModalEdit">
                    Change Profile
                </a>
            </button>



        </div>

        <div>
            <div class="font-bold text-xl mb-5 flex flex-row gap-24">
                Personal data
                <form action="{{ route('user.logout') }}" method="GET">
                    @csrf
                    <button type="submit"
                        class=" rounded-sm bg-red-600 block px-4 py-2 text-sm text-white hover:bg-red-500 "
                        >Log out</button>
                </form>
            </div>





            <div class="flex gap-28 items-center">
                <div class="flex-col flex gap-8 font-semibold">
                    <div>
                        Full Name
                    </div>

                    <div>
                        Email Address
                    </div>

                    <div>
                        Company Name
                    </div>

                    <div>
                        Division
                    </div>

                    <div>
                        Number
                    </div>

                    <div>
                        Linkedin
                    </div>

                    <div>
                        Instagram
                    </div>


                </div>

                <div class="flex-col flex gap-8">
                    <div>
                        <p>{{ auth()->user()->name }}</p>
                    </div>

                    <div>
                        <p>{{ auth()->user()->email }}</p>

                    </div>

                    <div>
                        <p>{{ auth()->user()->company }}</p>
                    </div>

                    <div>
                        <p>{{ auth()->user()->division }}</p>

                    </div>

                    <div>
                        <p>{{ auth()->user()->phone_number }}</p>

                    </div>

                    <div>
                        <p>{{ auth()->user()->linkedin }}</p>

                    </div>

                    <div>
                        <p>{{ auth()->user()->instagram }}</p>

                    </div>


                </div>

            </div>

        </div>
    </div>
@endsection


