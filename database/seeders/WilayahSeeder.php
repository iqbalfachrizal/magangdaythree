<?php

namespace Database\Seeders;

use App\Models\Wilayah;
use Illuminate\Database\Seeder;

class WilayahSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'Kecamatan Bantul',
            'Kecamatan Sewon',
            'Kecamatan Banguntapan',
            'Kecamatan Kasihan'
        ];

        foreach ($data as $wilayah) {
            Wilayah::create([
                'nama_wilayah' => $wilayah
            ]);
        }
    }
}

