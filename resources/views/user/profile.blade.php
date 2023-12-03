<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</div>
@extends('layouts.frontend')


@section('content')
    <div class="flex justify-ceenter items-center gap-24 max-w-max py-20 px-44">
        <div>
            <img src="{{ asset('images/banner.jpg') }}" class="h-[340px] w-[340px] rounded mb-8" alt="">

            <div class="w-full py-4 font-bold text-center border rounded-md border-[#888888]">Change Profile</div>
        </div>

        <div>
            <div class="font-bold text-xl mb-14">
                Personal data
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
                        Muhammad dandy Ferdiansyah
                    </div>

                    <div>
                        dandyferdiansyah2801@gmail.com
                    </div>

                    <div>
                        Lmp Networks
                    </div>

                    <div>
                        Director
                    </div>

                    <div>
                        081210729010
                    </div>

                    <div>
                        kapa asu
                    </div>

                    <div>
                        kapa asu
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
