@extends('layouts.frontend')


@section('content')



<div class="modal fade font-sans bg-gray-100 items-center justify-center  gap-24 max-w-max py-20 px-44" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div x-data={ showPrivacyPolicy: true } data-te-modal-dialog-ref>

      <!-- Button to open the privacy policy modal -->
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> View Privacy Policy </button>
      <!-- Privacy Policy Modal -->
      <div x-show="showPrivacyPolicy" class="fixed z-10 inset-0 flex items-center justify-center">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        <div class="relative bg-white rounded-lg overflow-hidden shadow-xl max-w-screen-md w-full m-4" x-transition:enter="transition ease-out duration-300 transform opacity-0 scale-95" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200 transform opacity-100 scale-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" x-cloak>
          <!-- Modal panel -->
          <div class="px-6 py-4">
            <h3 class="leading-6 font-bold text-2xl text-center"> Change Profile </h3>
          </div>
          <div class="prose max-w-screen-md p-6 overflow-y-auto" style="max-height: 70vh; background-color: #fff; border: 1px solid #e2e8f0; border-radius: 0.375rem; box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);">
              <form class="px-32">

                {{-- form start here --}}
                <form enctype="multipart/form-data" method="POST" action="{{ route('user.update', $users->id) }}">
                    @csrf
                    @method('PUT')
            <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
          Full name
        </label>
             <input type="text" class="form-control " id="name" name="name"
                placeholder="Joen doe" value="{{ $users->name }}">

      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
          Email Address
        </label>
        <input type="text" class="form-control" id="name" name="name"
                placeholder="Joen doe" value="{{ $users->email }}">

      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password
        </label>
        <input type="text" class="form-control" id="name" name="name"
        placeholder="*****" value="">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Company Name
        </label>
        <input type="text" class="form-control" id="name" name="name"
                placeholder="Joen doe" value="{{ $users->company }}">

      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Division
        </label>
        <input type="text" class="form-control" id="name" name="name"
                placeholder="Joen doe" value="{{ $users->division }}">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Number
        </label>
        <input type="text" class="form-control" id="name" name="name"
                placeholder="Joen doe" value="{{ $users->phone_number }}">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Linkedin
        </label>
        <input type="text" class="form-control" id="name" name="name"
                placeholder="Joen doe" value="{{ $users->linkedin }}">
      </div>


      {{-- <div class="mb-8">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Photo
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="photo" type="text" placeholder="photo">
      </div> --}}
      <div class="flex items-center justify-end">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Save
        </button>
      </div>
    </form>
    </form>
              </div>

        </div>
      </div>
    </div>
  </div>


@endsection
