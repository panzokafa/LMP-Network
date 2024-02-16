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
          <h3 class="card-title">Edit Product</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form enctype="multipart/form-data" method="POST" action="{{ route('admin.product.update', $products->id) }}">
            @csrf
            @method('PUT')
            <div class="card-body">

            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="MDC" value="{{ $products->name }}">
              </div>

              <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control @error('desc') text-danger fw-bold @enderror" name="desc" placeholder="Description...">{{ $products->desc }}</textarea>

              </div>

              <div class="form-group">
                <label for="char">Key Character</label>
                <input type="text" class="form-control" id="char" name="char" value="{{ $products->char }}" placeholder="5k - 10k MDC fully integrated with closed rack ">
              </div>

              {{-- <div class="form-group">
                  <label for="type">Type</label>
                  <select class="custom-select" name="type">
                      <option value="MDC" {{ $products->type === 'MDC' ? "selected" : ""}}>MDC</option>
                      <option value="Rack" {{ $products->type === 'Rack ' ? "selected" : ""}}>Rack</option>
                      <option value="Container" {{ $products->type === 'Container ' ? "selected" : ""}}>Container</option>
                      <option value="Centrinium" {{ $products->type === 'Centrinium ' ? "selected" : ""}}>Centrinium</option>
                    </select>
                </div> --}}

              <div class="form-group">
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
   <script>
    $(function() {
        $('textarea[name=desc]').summernote({
            height: 200
        });
    });
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

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection

