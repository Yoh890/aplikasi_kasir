@extends('layouts.master')
@section('content')

<div class="container">
<div class="card-header">
    <h3 class="card-title">Dashboard</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="small-box bg-info col-md-2 col-12">
        <div class="inner">
          <h3>150</h3>
          <p>Total Transaksi</p>
        </div>
        <div class="icon">
          <i class="fas fa-shopping-cart"></i>
        </div>
        <a href="#" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
      <div class="small-box bg-gradient-success col-md-2 col-12">
        <div class="inner">
          <h3>44</h3>
          <p>User Registrations</p>
        </div>
        <div class="icon">
          <i class="fas fa-user-plus"></i>
        </div>
        <a href="#" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
  </div>
</div>

@endsection
