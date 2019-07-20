<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'unit';

    protected $fillable = [
        'kode_unit', 'tipe_unit', 'no_polisi', 'jatah_solar'
    ];

    public $timestamps = false;
}
