<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TKegiatanIndikatorSikku extends Model
{
    protected $table = 't_kegiatan_indikator_sikkus';

    protected $fillable = [
        'kegiatan_sikku_id',
        'indikator_sikku_id',
    ];

    public function kegiatan_sikku()
    {
        return $this->belongsTo(KegiatanSikku::class);
    }

    public function indikator_sikku()
    {
        return $this->belongsTo(IndikatorSikku::class);
    }
}
