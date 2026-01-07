<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Harga;   // ← TAMBAHKAN INI

class HargaController extends Controller {
    public function filter(Request $request) {
        $query = Harga::with(['komoditas','pasar.wilayah']);

        if ($request->komoditas)
            $query->where('komoditas_id', $request->komoditas);

        if ($request->tanggal)
            $query->where('tanggal', $request->tanggal);

        return response()->json($query->get());
    }
}
