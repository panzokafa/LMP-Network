@extends('layouts.frontend')


@section('content')
    <div class="py-12 max-lg:px-7">

        <x-top-section title="LMP Centrinium"
            desc="Centrinium™️ UHD Series by LMP Networks®
            design for application at HQ and Data Center."
            image="centrinium/bg.jpg" />

        <x-centrinium.content />
    @endsection
