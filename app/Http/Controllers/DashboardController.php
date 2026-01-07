<?php

namespace App\Http\Controllers;

use App\Models\Harga;

class DashboardController extends Controller {
    public function index() {
        $data = Harga::with(['komoditas','pasar.wilayah'])
                ->orderBy('tanggal','desc')
                ->get();

        return view('home', compact('data'));
    }
}

