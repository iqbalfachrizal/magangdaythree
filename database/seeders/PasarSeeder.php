<?php

namespace Database\Seeders;

use App\Models\Pasar;
use Illuminate\Database\Seeder;

class PasarSeeder extends Seeder
{
    public function run()
    {
        Pasar::insert([
            ['wilayah_id' => 1, 'nama_pasar' => 'Pasar Bantul'],
            ['wilayah_id' => 1, 'nama_pasar' => 'Pasar Imogiri'],
            ['wilayah_id' => 2, 'nama_pasar' => 'Pasar Sewon'],
            ['wilayah_id' => 3, 'nama_pasar' => 'Pasar Banguntapan'],
            ['wilayah_id' => 4, 'nama_pasar' => 'Pasar Kasihan'],
        ]);
    }
}

