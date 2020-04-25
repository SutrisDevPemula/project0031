<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //inisialisaasi atbel
    protected $table = 'siswa';
    protected $fillable = ['nim','nama','jenis_kelamin','agama','alamat'];
}
