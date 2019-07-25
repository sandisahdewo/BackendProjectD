<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PitstopSaranaDetail extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                => $this->id,
            'pitstop_sarana_id' => $this->pitstop_sarana_id,
            'kode_unit'         => $this->kode_unit,
            'model_unit'        => $this->unit->tipe_unit,
            'no_polisi'         => $this->unit->no_polisi,
            'jatah_solar_unit'  => $this->unit->jatah_solar,
            'hm_km'             => $this->hm_km,
            'qty_solar'         => $this->qty_solar,
            'jatah_solar'       => $this->jatah_solar,
            'jam'               => $this->jam,
            'tanggal_view'      => date_view($this->created_at),
            'nama_user'         => $this->nama_user,
            'flow_meter_awal'   => $this->flow_meter_awal,
            'flow_meter_akhir'  => $this->flow_meter_akhir,
            'qty_flow_meter'    => $this->qty_flow_meter,
            'keterangan'        => $this->keterangan,
        ];
    }
}
