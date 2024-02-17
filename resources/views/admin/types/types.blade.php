@extends('admin.layouts.base');

@section('title', 'Types');

@section('content')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Type</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('admin.type.create') }}" class="btn btn-success">Create Type</a>
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
                                <table id="type" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($types as $type)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $type->name }}</td>
                                                <td>
                                                    <a href="{{ route('admin.type.edit', $type->id) }}"
                                                        class="btn btn-secondary">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form method="post"
                                                        action="{{ route('admin.type.destroy', $type->id) }}">
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
