@extends('layouts.master')
@section('content')

<div class="container">
  <div class="card-header">
    <h3 class="card-title">Dashboard</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="row">
      <div class="col-md-6 col-12">
        <div class="small-box bg-gradient-success">
          <div class="inner">
            <h3>{{ $totalTransaksi }}</h3>
            <p>Total Transaksi</p>
          </div>
          <div class="icon">
            <i class="fas fa-shopping-cart"></i>
          </div>
          <a href="{{ route('trk') }}" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <div class="col-md-6 col-12">
        <div class="small-box bg-gradient-warning">
          <div class="inner">
            <h3>{{ $totalBarang }}</h3>
            <p>Total Barang</p>
          </div>
          <div class="icon">
            <i class="fas fa-solid fa-box"></i>
          </div>
          <a href="{{ route('brg') }}" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <div class="col-md-6 col-12">
        <div class="small-box bg-gradient-secondary">
          <div class="inner">
            <h3>{{ $totalJenis }}</h3>
            <p>Total Jenis</p>
          </div>
          <div class="icon">
            <i class="fas fa-folder-open nav-icon"></i>
          </div>
          <a href="{{ route('jns') }}" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <div class="col-md-6 col-12">
        <div class="small-box bg-gradient-primary">
          <div class="inner">
            <h3>{{ $totalSupplier }}</h3>
            <p>Total Supplier</p>
          </div>
          <div class="icon">
            <i class="fas fa-solid fa-truck"></i>
          </div>
          <a href="{{ route('sup') }}" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
