<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota_aman extends Model
{
    protected $table = 'anggota_aman';
    protected $fillable = [
        'id',
        'nomor_anggota',
        'pengesahan',
        'pengurus_daerah',
        'komunitas',
        'luas_indikatif',
        'luas_pemetaan',
        'hutan_adat',
        'jml_laki_laki',
        'jml_perempuan',
        'status_brwa',
        'profil',
        'perda',
        'sk_bupati',
        'perbub',
        'perempuan_aman',
        'kader_pemula',
        'kader_penggerak',
        'kader_pemimpin',
        'bpan_laki_laki',
        'bpan_perempuan'
    ];
}
