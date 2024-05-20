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
                            <a href="{{ route('admin.product.create') }}" class="btn btn-success">Create Product</a>
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
                                            <th>Key Character</th>
                                            <th>Image</th>
                                            <th>Brochure</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $product->name }}</td>
                                                <td>{!! $product->desc !!}</td>
                                                <td>{{ $product->service_products->name }}</td>
                                                <td>{{ $product->char }}</td>
                                                <td>
                                                    <img src="{{ asset('image/' . $product->image) }}" width="50%">
                                                </td>

                                                <td>{{ $product->brosur }}</td>

                                                <td class="">
                                                    <a href="{{ route('admin.product.edit', $product->id) }}"
                                                        class="btn btn-warning">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form method="post"
                                                        action="{{ route('admin.product.destroy', $product->id) }}">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fas fa-trash"></i>
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
