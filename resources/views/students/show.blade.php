@extends('main');

@section('title', 'Detail Siswa')

@section('container')

<div class="container">
<div class="row">
<div class="col-7">
<h1 class="mt-3" >Detail Siswa</h1>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{ $student->nama }}</h5>
    <h6 class="card-subtitle mb-2">{{ $student->nis }}</h6>
    <p class="card-text">{{ $student->email }}</p>
    <p class="card-text">{{ $student->jurusan }}</p>
    
    <a href="{{ $student->id }}/edit" class="  btn btn-primary">Ubah</a>
    
    <form action="{{ $student->id }}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button type="submit"  class=" ml-8 btn btn-danger">Hapus</button>
    </form>
    <a href="{{ url('/students') }}" class="card-link ">Kembali</a>
  </div>
</div>

@endsection