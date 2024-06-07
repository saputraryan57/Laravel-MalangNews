@extends('layouts.app')

@section('title')
Penulis | Malang News
@endsection

@section('content')
<h3>Hapus Data Penulis</h3>
<div class="form-login">
    <h4>Ingin Menghapus Data ?</h4>
    <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
      <a href={{ url('/penulis/destroy/' . $penulis->id_penulis ) }}>
        Yes
      </a>
    </button>
    <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
      <a href="/penulis">
        No
      </a>
    </button>
  </div>  
@endsection
