<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintankInlet extends Model
{

    protected $table = 'maintank_inlet';

    protected $fillable = [
        'line', 'lokasi', 'shift', 'tanggal', 'petugas_inlet',
        'petugas_cek', 'status', 'approved_at', 'created_by'
    ];

    public function setTanggalAttribute($value)
    {
        return $this->attributes['tanggal'] = \date_db($value);
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function($model) {
            $model->created_by = auth()->user()->id;
            $model->petugas_inlet = auth()->user()->id;
        });
    }

}
