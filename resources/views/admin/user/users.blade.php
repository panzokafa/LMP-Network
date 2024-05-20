@extends('admin.layouts.base');

@section('title', 'User');

@section('content')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<div class="row">
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Users</h3>
        </div>
        <div class="card-body">
            @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
          <div class="row">
            <div class="col-md-12">
              <table id="user" class="table table-bordered table-hover table-responsive">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>Company</th>
                    <th>Division</th>
                    <th>Phone Number</th>
                    <th>LinkedIn</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)

                    <tr>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->role }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->company}}</td>
                      <td>{{ $user->division}}</td>
                      <td>{{ $user->phone_number}}</td>
                      <td>{{ $user->linkedin}}</td>
                      <td>
                        <a href="{{ route('admin.user.edit', $user->id) }}"
                            class="btn btn-secondary">
                            <i class="fas fa-edit"></i>
                        </a>

                        <form method="post"
                            action="{{ route('admin.user.destroy', $user->id) }}">
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
        $('#user').DataTable();
    </script>
@endsection
