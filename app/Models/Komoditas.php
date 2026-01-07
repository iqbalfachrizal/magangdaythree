<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komoditas extends Model {
    protected $fillable = ['nama_komoditas','satuan'];
    public function harga() {
        return $this->hasMany(Harga::class);
    }
}

