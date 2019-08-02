<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PitstopSarana extends Model
{
    protected $table = 'pitstop_sarana';

    protected $fillable = [
        'nomor', 'line', 'driver', 'fuelman', 'tanggal', 'shift',
        'whs_number', 'lokasi', 'petugas_pitstop', 'status',
        'approved_by', 'approved_at', 'created_by',
    ];

    public function setTanggalAttribute($value)
    {
        return $this->attributes['tanggal'] = date_db($value);
    }

    public function pitstopSaranaDetail()
    {
        return $this->hasMany(PitstopSaranaDetail::class, 'pitstop_sarana_id', 'id');
    }

    public function lastPitstopSaranaDetail()
    {
        return $this->hasOne(PitstopSaranaDetail::class, 'pitstop_sarana_id', 'id')->orderBy('id', 'desc');
    }

    public function petugas()
    {
        return $this->belongsTo(Petugas::class, 'fuelman_id', 'user_id');
    }

    public function rfuelman() 
    {
        return $this->belongsTo(Petugas::class, 'fuelman', 'id');
    }

    public function getShiftViewAttribute() 
    {
        $list = [
            'siang' => 'Siang (07:00 - 17:00)',
            'malam' => 'Malam (17:00 - 07:00)'
        ];

        return $list[$this->shift];
    }

    public function getSelisihFMAttribute()
    {
        $first = 0; $last = 0;

        $first = $this->pitstopSaranaDetail()->first();
        $last = $this->pitstopSaranaDetail()->latest()->first();
        
        if($first)
            $first = $first->flow_meter_awal;

        if($last)
            $last = $last->flow_meter_akhir;

        return $last-$first;
    }
}
