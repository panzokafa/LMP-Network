@extends('admin.layouts.base');

@section('title', 'Types');

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
          <h3 class="card-title">Create Type</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form enctype="multipart/form-data" method="POST" action="{{ route('admin.type.store') }}">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="MDC" value="{{ old('name') }}">
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
@endsection
