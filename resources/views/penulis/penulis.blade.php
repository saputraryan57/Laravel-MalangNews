@extends('layouts.app')

@section('title')
Penulis | Malang News
@endsection

@section('content')
<h3>Data Penulis</h3>
<table class="data-table">
  <thead>
    <tr>
        <th>No</th>
        <th>Nama Penulis</th>
        <th>Email</th>
        <th>Nomor Telepon</th>
        <th>Bio Penulis</th>
        <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($penulis as $no => $penulis)
    <tr>
      <td>{{ $no+1 }}</td>
      <td>{{ $penulis->nama_penulis }}</td>
      <td>{{ $penulis->email }}</td>
      <td>{{ $penulis->no_tlp }}</td>
      <td>{{ $penulis->bio_penulis }}</td>
      <td>
        <a class='btn-edit' href="/penulis/edit/{{ $penulis->id_penulis }}">Edit</a>
        |
        <a class='btn-delete' href="/penulis/hapus/{{ $penulis->id_penulis }}">Hapus</a>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="5" align="center">Tidak ada data</td>
    </tr>
    @endforelse
  </tbody>
</table>
@endsection
