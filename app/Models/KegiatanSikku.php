<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KegiatanSikku extends Model
{
    protected $table = 'kegiatan_sikkus';

    protected $fillable = [
        'nama_kegiatan',
    ];
}
