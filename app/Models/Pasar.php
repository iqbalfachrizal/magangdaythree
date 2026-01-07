<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasar extends Model
{
    protected $table = 'pasar'; // ⬅️
    protected $fillable = ['wilayah_id','nama_pasar'];

    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class);
    }

    public function harga()
    {
        return $this->hasMany(Harga::class);
    }
}


