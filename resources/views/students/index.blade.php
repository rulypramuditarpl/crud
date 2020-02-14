@extends('main');

@section('title', 'Data Siswa')

@section('container')

<div class="container">
<div class="row">
<div class="col-6">
<h1 class="mt-3" >Data Siswa</h1>

<a href="{{ url('/students/create') }}" class="mb-5 btn btn-primary">Tambah</a>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

<ul class="mb-5 list-group">
@foreach( $students as $student )
  <li class="list-group-item d-flex justify-content-between align-items-center">
    {{ $student->nama }}
    <td>
  
    <a href="/students/{{ $student->id }}" class="badge badge-info">Detail</a> 
    </td>
 </li>

 @endforeach
</ul>

@endsection