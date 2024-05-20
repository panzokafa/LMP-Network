@extends('admin.layouts.base');

@section('title', 'user');

@section('content')
<div class="row">
    <div class="col-md-12">

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

      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Edit user</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form enctype="multipart/form-data" method="POST" action="{{ route('admin.user.update', $users->id) }}">
            @csrf
            @method('PUT')
            <div class="card-body">

            <div class="form-group">
                <label for="title">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name User" value="{{ $users->name }}">
              </div>

              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{ $users->email  }}">
              </div>

              <div class="form-group">
                <label for="company">Company Name</label>
                <input type="text" class="form-control" id="company" name="company" placeholder="company" value="{{ $users->company  }}">
              </div>

              <div class="form-group">
                <label for="email">Division</label>
                <input type="text" class="form-control" id="division" name="division" placeholder="division" value="{{ $users->division  }}">

              </div>

              <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="phone_number" value="{{ $users->phone_number }}">
              </div>

              <div class="form-group">
                <label for="linkedin">Linkedin</label>
                <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="linkedin" value="{{ $users->linkedin}}">
              </div>

              <div class="form-group">
                <label for="instagram">Instagram</label>
                <input type="text" class="form-control" id="instagram" name="instagram" placeholder="instagram" value="{{ $users->instagram}}">
              </div>

              <div class="form-group">

                <label for="profile_picture">Profile Picture</label>
                <input type="file" class="form-control" name="profile_picture">
                <div class="mb-3">
                    <img src="" class="img-thumbnail mt-3 mb-3 d-none w-25" id="preview">
                </div>
              </div>

            </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('js')


  <script>
    $('#release-date').datetimepicker({
        format: 'YYYY-MM-DD'
    })
  </script>
   <script>
    $(function() {
        $('input[name=desc]').summernote({
            height: 200
        });
    });
</script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<script>
    $(function() {
        $('input[name=profile_picture]').change(function() {
            imagePreview(this);
        });
    });

    function imagePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $("#preview").removeClass("d-none");
                $("#preview").attr("src", e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>


@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection

