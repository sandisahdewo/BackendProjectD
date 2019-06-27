<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\User as UserResource;

class Petugas extends JsonResource
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
            'nama'          => $this->nama,
            'email'         => $this->email, 
            'no_hp'         => $this->no_hp,
            'tanggal_lahir' => $this->tanggal_lahir,
            'created_by'    => $this->createdBy->username,
            'created_at'    => $this->created_at,
            'user'          => new UserResource($this->whenLoaded('user'))
        ];
    }
}
