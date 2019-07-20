<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PitstopSarana extends Model
{
    protected $table = 'pitstop_sarana';

    protected $fillable = [
        'nomor', 'line', 'driver', 'fuelman', 'tanggal', 'shift',
        'whs_number', 'lokasi', 'petugas_pitstop', 'status',
        'approved_by', 'approved_at', 'created_by'
    ];

    public function setTanggalAttribute($value)
    {
        return $this->attributes['tanggal'] = date_db($value);
    }

    public function pitstopSaranaDetail()
    {
        return $this->hasMany(PitstopSaranaDetail::class, 'pitstop_sarana_id');
    }

    public function petugas()
    {
        return $this->belongsTo(Petugas::class, 'fuelman_id', 'user_id');
    }

    public function rfuelman() 
    {
        return $this->belongsTo(Petugas::class, 'fuelman', 'user_id');
    }
}
