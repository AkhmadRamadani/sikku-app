<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = 'mata_kuliahs';

    protected $fillable = [
        'nama_mata_kuliah',
        'program_studi_id',
    ];

    public function program_studi()
    {
        return $this->belongsTo(ProgramStudi::class);
    }
}
