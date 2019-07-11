<?php

namespace App\Http\Resources;

use App\Http\Resources\PitstopSaranaDetail as PitstopSaranaDetail;
use Illuminate\Http\Resources\Json\JsonResource;

class PitstopSarana extends JsonResource
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
            'id'            => $this->id,
            'line'          => ucfirst($this->line),
            'driver'        => $this->driver,
            'tanggal'       => $this->tanggal,
            'tanggal_view'  => date_view($this->tanggal),
            'fuelman'       => $this->rfuelman->nama,
            'shift'         => $this->shift,
            'shift_view'    => $this->formatShift($this->shift),
            'whs_number'    => $this->whs_number,
            'location'      => $this->lokasi,
            'status'        => $this->status,
            'detail'        => PitstopSaranaDetail::collection($this->whenLoaded('pitstopSaranaDetail')),
        ];
    }

    public function formatShift($key) 
    {
        $list = [
            'siang' => 'Siang (07:00 - 17:00)',
            'malam' => 'Malam (17:00 - 07:00)'
        ];

        return $list[$key];
    }
}
