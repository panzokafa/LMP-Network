@extends('layouts.app')

@section('css')
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
@endsection

@section('content')
    <div class="min-h-screen flex flex-row items-center justify-center bg-white">
        <div class="flex flex-col items-center justify-center">
            <div class="pt-20 w-full px-4 pb-20 ">
                <div class="container mx-auto ">
                    <div class="bg-white rounded border shadow-lg p-4 px-4 md:p-8 mb-6">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg text-black">Edit Profile</p>
                                <p>Please fill out all the fields.</p>
                            </div>
                            {{-- data profile --}}
                            <div class="lg:col-span-2">
                                <div class=" grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">

                                    <div class="md:col-span-5 flex flex-row">

                                        <div class="flex gap-2 justify-content-between">
                                            <p>Full Name : </p>
                                            <p>{{ auth()->user()->name }}</p>
                                        </div>
                                    </div>

                                    <div class="md:col-span-5 flex flex-row">
                                    <div class="flex gap-2 justify-content-between">
                                        <p>Email Address: </p>
                                        <p>{{ auth()->user()->email }}</p>
                                    </div>
                                    </div>

                                    <div class="md:col-span-5 flex flex-row">
                                    <div class="flex gap-2 justify-content-between">
                                        <p>Company Name : </p>
                                        <p>{{ auth()->user()->company }}</p>
                                    </div>
                                    </div>

                                    <div class="md:col-span-5 flex flex-row">
                                    <div class="flex gap-2 justify-content-between">
                                        <p>Division : </p>
                                        <p>{{ auth()->user()->division }}</p>
                                    </div>
                                    </div>

                                    <div class="md:col-span-5 flex flex-row">
                                    <div class="flex gap-2 justify-content-between">
                                        <p>Phone Number : </p>
                                        <p>{{ auth()->user()->phone_number }}</p>
                                    </div>
                                    </div>

                                    <div class="md:col-span-5 flex flex-row">
                                    <div class="flex gap-2 justify-content-between">
                                        <p>Linkedin : </p>
                                        <p>{{ auth()->user()->linkedin }}</p>
                                    </div>
                                    </div>
                                </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
