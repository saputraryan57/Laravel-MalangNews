@extends('layouts.app')

@section('title')
Penulis | Malang News
@endsection

@section('content')
<h3>Edit Data Penulis</h3>
<form action="{{ url('/penulis/update/'.$penulis->id_penulis) }}" method="POST">
    @csrf
    @method('put')
    <label for="nama">NAMA PENULIS</label>
    <input type="text" id="nama" name="nama" value="{{ $penulis->nama_penulis }}" required>
    
    <label for="email">EMAIL</label>
    <input type="email" id="email" name="email" value="{{ $penulis->email }}" required>

    <label for="tlp">NOMOR TELEPON</label>
    <input type="text" id="tlp" name="tlp" value="{{ $penulis->no_tlp }}" required>

    <label for="bio">BIO PENULIS</label>
    <input type="text" id="bio" name="bio" value="{{ $penulis->bio_penulis }}" required>
    
    <button type="submit" class="btn">Submit</button>
</form>
@endsection
