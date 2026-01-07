<?php

namespace Database\Seeders;

use App\Models\Harga;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class HargaSeeder extends Seeder
{
    public function run()
    {
        $tanggal = Carbon::now()->subDays(7);

        for ($i = 0; $i < 30; $i++) {
            Harga::create([
                'komoditas_id' => rand(1,6),
                'pasar_id'     => rand(1,5),
                'harga'        => rand(10000, 60000),
                'tanggal'      => $tanggal->copy()->addDays($i)
            ]);
        }
    }
}

