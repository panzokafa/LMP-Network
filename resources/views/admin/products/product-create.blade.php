@extends('admin.layouts.base');

@section('title', 'Product');

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
          <h3 class="card-title">Create Product</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form enctype="multipart/form-data" method="POST" action="{{ route('admin.product.store') }}">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="title">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="MDC" value="{{ old('name') }}">
            </div>

            <div class="form-group">
              <label for="desc">Desc</label>
              <input type="text" class="form-control" id="desc" name="desc" value="{{ old('desc')}}" placeholder="5k - 10k MDC fully integrated with closed rack ">
            </div>

            <div class="form-group">
                <label for="char">Key Character</label>
                <input type="text" class="form-control" id="char" name="char" value="{{ old('char')}}" placeholder="  - 5k - 10k MDC fully integrated with closed rack ">
              </div>

            {{-- <div class="form-group">
                <label for="type">Type</label>
                <select class="custom-select" name="type">
                    <option value="MDC" {{ old('type') === 'MDC' ? "selected" : ""}}>MDC</option>
                    <option value="Rack" {{ old('type') === 'Rack ' ? "selected" : ""}}>Rack</option>
                    <option value="Container" {{ old('type') === 'Container ' ? "selected" : ""}}>Container</option>
                    <option value="Centrinium" {{ old('type') === 'Centrinium ' ? "selected" : ""}}>Centrinium</option>
                  </select>
              </div> --}}

            <div class="form-group">
                <div class="mb-3">
                    <img src="" class="img-thumbnail mt-3 mb-3 d-none w-25" id="preview">
                </div>
              <label for="image">Image</label>
              <input type="file" class="form-control" name="image">
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
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<script>
    $(function() {
        $('input[name=image]').change(function() {
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
