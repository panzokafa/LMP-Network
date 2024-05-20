@extends('admin.layouts.base');

@section('title');

@section('content')
<div class="text-center justify-content-center w-20 1/3  p-4 mb-5">
    <a href="{{ route('user.home')}}" class="w-24 h-auto">
        <img src="{{ asset('images/logo1.png') }}" alt="">
    </a>


</div>

<div class="flex flex-row container-fluid">
    <!-- Small boxes (Stat box) -->

      <!-- ./col -->
      <div class="row-lg-3 col-4">
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
       <div class="row-lg-3 col-4">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{ $type }}</h3>
            <p>Product Types</p>
          </div>
          <div class="icon">
            <i class="ion-bookmark"></i>
          </div>
          <a href="{{ route('admin.type') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>


      <!-- ./col -->

      <div class="row-lg-3 col-4">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{ $products }}</h3>
            <p>Products</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="{{ route('admin.product') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>

@endsection
