<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable = ['nama', 'nis', 'email', 'jurusan'];
 }
// <a href="{{ url('/students/create') }}" class="badge badge-primary">Tambah</a>
// <button type="sumbit" class=" f badge badge-success">edit</button>
// <button type="sumbit"  class=" ml-8 badge badge-danger">hapus</button>