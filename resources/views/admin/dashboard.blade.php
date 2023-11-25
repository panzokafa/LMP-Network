@extends('admin.layouts.base');

@section('title');

@section('content')
<div class="text-center justify-content-center p-4 ">
    <h1>LMP Dashboard</h1>


</div>

<div class="container-fluid">
    <!-- Small boxes (Stat box) -->

      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $user }}</h3>

            <p>User Registrations</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="{{ route('admin.user') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <!-- ./col -->
    </div>

@endsection
