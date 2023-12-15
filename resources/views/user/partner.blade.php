@extends('layouts.frontend')


@section('content')
    <div class="relative flex items-center justify-center">
        <div class="absolute">
            <div class="font-bold mb-3 text-white text-5xl px-12">LMP Partner </div>
            <div class="w-full h-1 biru"></div>
        </div>
        <img class="object-cover w-full" src="{{ asset('images/partner/bg.jpg') }}" alt="">
    </div>

    <div class="flex flex-wrap gap-x-24 gap-y-36 w-full justify-center items-center py-24 px-52">
        @for ($i = 1; $i < 9; $i++)
            <img class="{{ $i < 7 ? null : 'col-span-2 ' }}" src="{{ asset('images/partner/' . $i . '.png') }}"
                alt="">
        @endfor
    </div>
@endsection
