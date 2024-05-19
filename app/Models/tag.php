<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    use Sluggable;
    
    protected $table = 'tag';
    protected $fillable = [
        'id',
        'tag_berita',
        'slug',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'tag_berita'
            ]
        ];
    }
}
