<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bamasis extends Model
{
    protected $table = 'bamasis';

    public $timestamps = false;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
