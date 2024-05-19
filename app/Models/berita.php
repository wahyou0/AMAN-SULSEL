<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use Sluggable;

    protected $table = 'berita';
    protected $fillable = [
        'id',
        'judul',
        'slug',
        'kategori',
        'tag',
        'tanggal',
        'tempat',
        'penulis',
        'foto',
        'isi',
        'status_berita'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
}
