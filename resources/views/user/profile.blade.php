<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</div>
@extends('layouts.frontend')


@section('content')
{{-- @include('components.modal') --}}
    <div class="flex justify-ceenter items-center gap-24 max-w-max py-20 px-44">
        <div>
            <img src="{{ asset('images/Avatar.png') }}"  class="h-[340px] w-[340px] rounded mb-8" alt="" >

{{-- @include('components.modal') --}}

            <button
            class="w-full py-4 font-bold text-center border rounded-md border-[#888888] open_modal" >
                <a href="{{ route('user.edit', auth()->user()->id) }}">
                    Change Profile
                </a>
            </button>

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



                </div>
            </div>
        </div>
    </div>




@endsection

@section('js')
<script>
 $(document).on('click','.open_modal',function(){
        var url = "domain.com/yoururl";
        var tour_id= $(this).val();
        $.get(url + '/' + users_id, function (data) {
            //success data
            console.log(data);
            $('#users_id').val(data.id);
            $('#name').val(data.name);
            $('#details').val(data.details);
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        })
    });
</script>
@endsection
