<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriSosiometri extends Model
{
    protected $table = 'kategori_sosiometris';

    protected $fillable = [
        'nama_kategori_sosiometri',
    ];
}
