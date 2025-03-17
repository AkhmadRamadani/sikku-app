<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnsurSosiometri extends Model
{
    protected $table = 'unsur_sosiometris';

    protected $fillable = [
        'unsur_sosiometri',
        'kategori_sosiometri_id',
    ];

    public function kategori_sosiometri()
    {
        return $this->belongsTo(KategoriSosiometri::class);
    }
}
