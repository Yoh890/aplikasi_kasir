@extends('layouts.master')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Tambah Data Barang</h3>
</div>


<form method="POST" action="{{ route('brg_simpan') }}">
	@csrf
   <div class="card-body">
      <div class="form-group">
            <label for="">Kode Barang</label>
            <input type="text" name="barang_kode" class="form-control" id="" placeholder=" " required>
      </div>

      <div class="form-group">
            <label for="">Nama Barang</label>
            <input type="text" name="barang_nama" class="form-control" id="" placeholder=" " required>
      </div>

      <div class="form-group">
            <label for="">Id Jenis</label>
            <select name="id_jenis" class="form-control" required>
                  <option>Silahkan Dipilih</option>
                  @foreach($jenis as $j)
                  <option value="{{$j -> id_jenis}}">{{$j -> jenis_nama}}</option>
                  @endforeach
            </select>
      </div>

      <div class="form-group">
            <label for="">Id Supplier</label>
             <select name="id_supplier" class="form-control" required>
                  <option>Silahkan Dipilih</option>
                  @foreach($supplier as $s)
                  <option value="{{$s -> id_supplier}}">{{$s -> supplier_nama}}</option>
                  @endforeach
            </select>
      </div>

      <div class="form-group">
            <label for="">Harga Jual</label>
            <input type="text" name="harga_jual" class="form-control" id="harga" placeholder=" " required>
      </div>

       <div class="form-group">
            <label for="">Status Barang</label>
            <select name="barang_status" class="form-control" required>
                  <option>Active</option>
                  <option>Kosong</option>
      </div>

      <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Simpan">
      </div>
  </div>
</form>
</div>

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#harga').on('input', function() {
            var val = $(this).val().replace(/\D/g, ''); // Hapus karakter non-digit
            var formattedVal = new Intl.NumberFormat('id-ID').format(val);

            $(this).val(formattedVal);
        });
    });
</script> --}}



@endsection
