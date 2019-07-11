<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PitstopSaranaDetail extends Model
{
    protected $table = 'pitstop_sarana_detail';

    protected $fillable = [
        'pitstop_sarana_id', 'kode_unit', 'hm_km', 'qty_solar', 
        'jatah_solar', 'jam', 'nama_user', 'flow_meter_awal', 
        'flow_meter_akhir', 'qty_flow_meter', 'created_by'
    ];

    public function setJamAttibute($value)
    {
        return $this->attributes['jam'] = time_db($value);
    }

    public function setQtyFlowMeterAttribute()
    {
        $qty = $this->flow_meter_akhir - $this->flow_meter_awal;

        return $this->attributes['qty_flow_meter'] = $qty;
    }

    public function unit() 
    {
        return $this->belongsTo(Unit::class, 'kode_unit', 'kode_unit');
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function($model) {
            $qty = $model->flow_meter_akhir - $model->flow_meter_awal;
            $model->created_by = auth()->user()->id;
            $model->qty_flow_meter = $qty;
        });

        self::updating(function($model) {
            $qty = $model->flow_meter_akhir - $model->flow_meter_awal;
            $model->qty_flow_meter = $qty;
        });
    }

}
