@extends('main');

@section('title', 'Ubah  Data Siswa')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3" >Ubah Data Siswa</h1>


     <form method="post" action="/students/{{ $student->id }}">
     @method('patch')
     @csrf
  <div class="form-group">
    <label for="nama">nama</label>
    <input type="text" class="form-control @error('nama')is-invalid @enderror" id="nama" placeholder="nama" name="nama" value="{{ $student->nama }}">
    @error('nama')    
    <div class="invalid-feedback">
         {{ $message }}
        </div>
        @enderror
  </div>
  <div class="form-group">
    <label for="nis">nis</label>
    <input type="text" class="form-control @error('nis')is-invalid @enderror" id="nis" placeholder="nis" name="nis" value="{{ $student->nis }}">
    @error('nis')    
    <div class="invalid-feedback">
         {{ $message }}
        </div>
        @enderror
  </div>
  <div class="form-group">
    <label for="email">email</label>
    <input type="text" class="form-control  @error('email')is-invalid @enderror" id="nis" id="email" placeholder="email" name="email" value="{{ $student->email }}">
    @error('email')    
    <div class="invalid-feedback">
         {{ $message }}
        </div>
        @enderror
  </div>
  <div class="form-group">
    <label for="jurusan">jurusan</label>
    <input type="text" class="form-control @error('jurusan')is-invalid @enderror" id="jurusan" placeholder="jurusan" name="jurusan"value="{{ $student->jurusan }}">
    @error('jurusan')    
    <div class="invalid-feedback">
         {{ $message }}
        </div>
        @enderror
  </div>
 <button type="submit" class="btn btn-primary">ubah data</button>
</form>
</div>
</div>
</div>

@endsection