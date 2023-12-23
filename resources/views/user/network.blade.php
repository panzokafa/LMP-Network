@extends('layouts.frontend')


@section('content')
    <div class="py-12 max-lg:px-7">
        <x-topsection title="LMP Networks"
            desc="LMP Networks provide Ultra High Density Solution
        for connectivity in Data Center. Optimizing Space -
        Air flow and Efficiency in Cooling Systems & Energy
        consumption."
            image="network/bg.jpg" />
        <x-network.content />
    </div>
@endsection
