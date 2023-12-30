@extends('layouts.frontend')


@section('content')
    <div class="fixed z-30 inset-0 flex justify-center items-center">
        {{-- Alert Here --}}
      @if ($errors->any())

      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        <div class=" p-10 lg:px-96  mt-24 relative bg-white rounded-lg overflow-hidden shadow-xl max-w-screen-md  "
            x-transition:enter="transition ease-out duration-300 transform opacity-0 scale-95"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200 transform opacity-100 scale-100"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" x-cloak>
            <div class="flex justify-center items-center ">

                <form action="{{ route('user.update', auth()->user()->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="px-6 pt-4 pb-8 ">
                        <p class="leading-6 font-bold text-2xl text-center"> Change Profile </p>
                    </div>

                    <div class="  max-w-screen-md relative p-auto overflow-y-auto w-96"
                        style="max-height: 70vh;  border-radius: 0.375rem; rgba(0, 0, 0, 0.1);">


                        <div class="flex items-center justify-center  border-right ">
                            <div class="flex d-flex flex-col items-center text-center">
                                <img src=" {{ asset('storage/picture/' . auth()->user()->profile_picture) }} "
                                    class="brand-image img-circle elevation-3 rounded-full mb-5" height="100" width="100"
                                    id="image_preview_container" alt="">
                                <div class=" font-normal flex items-center justify-center w-60">
                                    <input type="file" name="profile_picture" id="profile_picture" value="{{ $users->profile_picture }}" class="form-control">
                                </div>

                            </div>
                        </div>

                        <p class="leading-6 font-semibold text-xl text-center mt-3 mb-6"> Change Photo </p>

                        <div class=" mx-10">
                        <div class="mb-6">
                            <label for="name" class="text-sm font-medium text-gray-900 block mb-2">Full Name</label>
                            <input type="text" value="{{ $users->name }}" id="name" name="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-sm"
                                placeholder="Name User" required="">
                        </div>

                        <div class="mb-6">
                            <label for="email" class="text-sm font-medium text-gray-900 block mb-2">Email Address</label>
                            <input type="text" value="{{ $users->email }}" id="email" name="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-sm"
                                placeholder="Email" required="">
                        </div>

                        {{-- <div class="mb-6">
                            <label for="password" class="text-sm font-medium text-gray-900 block mb-2">Password</label>
                            <input type="password"  id="password" name="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-sm"
                                placeholder="****">
                            <p class=" text-biru text-sm">*leave blank if you don't want to change password</p>
                        </div> --}}

                        <div class="mb-6">
                            <label for="company" class="text-sm font-medium text-gray-900 block mb-2">Company Name</label>
                            <input type="text" value="{{ $users->company }}" id="company" name="company"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-sm"
                                placeholder="company" required="">
                        </div>

                        <div class="mb-6">
                            <label for="division" class="text-sm font-medium text-gray-900 block mb-2">Division</label>
                            <input type="text" value="{{ $users->division }}" id="division" name="division"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-sm"
                                placeholder="division" required="">
                        </div>

                        <div class="mb-6">
                            <label for="phone_number"
                                class="text-sm font-medium text-gray-900 block mb-2">Phone Number</label>
                            <input type="text" value="{{ $users->phone_number }}" id="phone_number" name="phone_number"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-sm"
                                placeholder="phone_number" required="">
                        </div>

                        <div class="mb-6">
                            <label for="linkedin" class="text-sm font-medium text-gray-900 block mb-2">Linkedin</label>
                            <input type="text" value="{{ $users->linkedin }}" id="linkedin" name="linkedin"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-sm"
                                placeholder="linkedin" required="">
                        </div>

                        <div class="mb-6">
                            <label for="instagram" class="text-sm font-medium text-gray-900 block mb-2">Instagram</label>
                            <input type="text" value="{{ $users->instagram }}" id="instagram" name="instagram"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-sm"
                                placeholder="instagram" required="">
                        </div>

                        <div class=" flex items-end justify-end">
                            <button type="submit"
                                class="text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Save</button>
                        </div>
                         </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
@endsection
