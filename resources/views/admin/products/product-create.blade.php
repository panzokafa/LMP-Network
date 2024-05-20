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
              <label for="desc">Description</label>
              <textarea class="form-control @error('desc') text-danger fw-bold @enderror" name="desc" placeholder="Description..."></textarea>
            </div>

            <div class="form-group">
                <label for="name" class="form-label">
                    Type <span class="text-danger">*</span>
                </label>
                <select class="form-control @error('service_type_id') text-danger is-invalid @enderror"
                    name="type_id">

                    @foreach ($types as $item)
                        <option value="{{ $item->id }}"> {{ $item->name }} </option>
                    @endforeach
                </select>
            </div>

            <table class="table table-bordered" id="table">
                <tr>
                <label for="char">Key Character</label>
            </tr>
                <tr>
                    <td>
                     <input type="text" class="form-control" id="kchar" name="kchar[]" value="{{ old('char')}}" placeholder="5k - 10k MDC fully integrated with closed rack ">
                    </td>
                    <td>
                        <button type="button" name="add" id="add" class="btn btn-success">Add More</button>
                    </td>
                </tr>
            </table>

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

              <label for="image">Image</label>
              <input type="file" class="form-control" name="image">
              <div class="mb-3">
                <img src="" class="img-thumbnail mt-3 mb-3 d-none w-25" id="preview">
            </div>
            </div>

            <div class="form-group">
                <label for="brosur">Brochure</label>
                <input type="file" class="form-control" name="brosur">
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
     var i = 0
     $('#add').click(function(){
        ++i;
        $('#table').append(
            `<tr>
                <td>
                    <input type="text" class="form-control" id="kchar" name="kchar[`+i+`]" value="{{ old('char')}}" placeholder="5k - 10k MDC fully integrated with closed rack ">
                </td>
                <td>
                    <button type="button" class="btn btn-danger remove-table-row">Remove</button>
                </td>

            </tr>`);
     });

     $(document).on('click', '.remove-table-row', function(){
        $(this).parents('tr').remove();
     });
  </script>

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
