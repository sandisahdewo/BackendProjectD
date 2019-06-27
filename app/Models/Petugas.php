<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';

    protected $fillable = [
        'user_id', 'nama', 'email', 'email', 'no_hp', 'tanggal_lahir', 'created_by',
    ];

    public function setTanggalLahirAttribute($value)
    {
        return $this->attributes['tanggal_lahir'] = \date_db($value);
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(\App\User::class, 'created_by');
    }

}
