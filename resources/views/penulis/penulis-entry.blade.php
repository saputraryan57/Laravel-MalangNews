@extends('layouts.app')

@section('title')
Penulis | Malang News
@endsection

@section('content')
<h3>Tambah Data Penulis</h3>
<form action="{{ url('/penulis/store') }}" method="POST">
    @csrf
    <label for="nama">NAMA PENULIS</label>
    <input type="text" id="nama" name="nama" required>
    
    <label for="email">EMAIL</label>
    <input type="email" id="email" name="email" required>

    <label for="tlp">NOMOR TELEPON</label>
    <input type="text" id="tlp" name="tlp" required>

    <label for="bio">BIO PENULIS</label>
    <input type="text" id="bio" name="bio" required>
    
    <button type="submit" class="btn">Submit</button>
</form>
@endsection
