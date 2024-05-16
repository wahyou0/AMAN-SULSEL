<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $table = 'berita';
    protected $fillable = [
        'id',
        'judul',
        'kategori',
        'tag',
        'tanggal',
        'tempat',
        'penulis',
        'foto',
        'isi'
    ];
}
