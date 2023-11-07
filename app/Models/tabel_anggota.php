<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabel_anggota extends Model
{
    protected $table = 'tabel_anggotas';
    protected $fillable = [
        'id',
        'nama_lengkap',
        'nama_panggilan',
        'tempat_lahir',
        'tgl_lahir',
        'jenis_kelamin',
        'nama_komunitas',
        'alamat',
        'no_hp',
        'email',
    ];
}
