@extends('admin.layouts.base');

@section('title', 'Product');

@section('content')
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<div class="row">
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Products</h3>
        </div>
        <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <a href="{{ route('admin.product.create')}}" class="btn btn-success">Create Product</a>
              </div>
            </div>


        <div class="card-body">
            @if (session()->has('success'))
              <div class="alert alert-success">
                {{ session('success') }}
              </div>
          @endif

          <div class="row">
            <div class="col-md-12">
              <table id="product" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)

                    <tr>
                      <td>{{ $product->name }}</td>
                      <td>{{ $product->desc }}</td>
                      <td>{{ $product->type}}</td>
                      <td>
                        <img src="{{ asset('storage/product/'.$product->image) }}" width="50%" >
                    </td>
                    <td class="flex flex-row gap-5">
                        <a href="{{ route('admin.product.edit', $product->id )}}" class="btn btn-warning">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form method="post" action="{{ route('admin.product.destroy', $product->id) }}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                      </td>
                    </tr>
                    @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection

  @section('js')
  <script>
    $('#product').DataTable();
  </script>
@endsection
