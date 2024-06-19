@extends('admin.layouts.base');

@section('title', 'Email Admin');

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
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create Email Admin</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ $email ? route('emails.update', $email) : route('emails.store') }}" method="POST">
                    @csrf
                    @if ($email)
                        @method('PUT')
                    @endif
                    <div class="form-group">
                        <table class="table table-bordered" id="table">
                            <td>
                                <label for="email">Email</label>
                            </td>
                            <tr>

                                <td>
                                    <input class="form-control" type="email" name="email"
                                        value="{{ old('email', $email ? $email->email : '') }}" required>
                                </td>
                                <td>
                                    <button class="btn btn-success" type="submit">Submit</button>
                                </td>
                            </tr>
                        </table>
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

    <table class="table table-bordered" id="table">
        <tr>
            <label for="char">Key Character</label>
        </tr>
        <tr>
            <td>
                <input type="text" class="form-control" id="kchar" name="kchar[]" value="{{ old('char') }}"
                    placeholder="5k - 10k MDC fully integrated with closed rack ">
            </td>
            <td>
                <button type="button" name="add" id="add" class="btn btn-success">Add More</button>
            </td>
        </tr>
    </table>



@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection
