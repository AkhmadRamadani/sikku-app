<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TKelasBamasis extends Model
{
    protected $table = 't_kelas_bamasis';

    protected $guarded = [];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function bamasis()
    {
        return $this->belongsTo(Bamasis::class);
    }
}
