<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aktivitas_kader extends Model
{
    protected $table = 'aktivitas_kaders';
    protected $fillable = [
        'id',
        'id_kader',
        'nama_kader',
        'status_kader',
        'keterangan',
    ];
}
