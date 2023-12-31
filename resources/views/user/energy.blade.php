@extends('layouts.frontend')


@section('content')
    <div class="py-12 max-lg:px-10 max-sm:px-5">
        <x-top-section title="LMP Renewable Energy"
            desc="Together we create a better future
            a greener data center." image="energy/bg.jpg" />

        <x-energy.content />
    </div>
@endsection
