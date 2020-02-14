@extends('main');

@section('title', 'Daftar Siswa')

@section('container')

<div class="container">
<div class="row">
<div class="col-10">
<h1 class="mt-3" >Daftar Siswa</h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Nis</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach( $siswa as $ss  )
    <td scope="row">{{ $loop->iteration }}</td>
    <td>{{ $ss->nama }}</td>
    <td>{{ $ss->nis }}</td>
    <td>{{ $ss->email }}</td>
   <td>{{ $ss->jurusan }}</td>
    <td>
    <a href="#" class="badge badge-success">edit</a>
    <a href="#" class="badge badge-danger">hapus</a>
    </td>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>
@endsection