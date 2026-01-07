<?php

namespace Database\Seeders;

use App\Models\Komoditas;
use Illuminate\Database\Seeder;

class KomoditasSeeder extends Seeder
{
    public function run()
    {
        Komoditas::insert([
            ['nama_komoditas' => 'Beras Medium', 'satuan' => 'Kg'],
            ['nama_komoditas' => 'Beras Premium', 'satuan' => 'Kg'],
            ['nama_komoditas' => 'Cabai Merah', 'satuan' => 'Kg'],
            ['nama_komoditas' => 'Cabai Rawit', 'satuan' => 'Kg'],
            ['nama_komoditas' => 'Minyak Goreng', 'satuan' => 'Liter'],
            ['nama_komoditas' => 'Gula Pasir', 'satuan' => 'Kg'],
        ]);
    }
}

