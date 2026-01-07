@extends('layouts.app')

@section('content')

<!-- HEADER -->
<div class="mb-4">
    <h4 class="fw-bold">Dashboard Harga Makanan Modern</h4>
    <p class="text-muted">Monitoring harga komoditas pangan harian</p>
</div>

<!-- CARD STATISTIK -->
<div class="row mb-4">
    <div class="col-md-4">
        <div class="card p-3">
            <div class="card-title">Total Data</div>
            <div class="card-value">{{ $data->count() }}</div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3">
            <div class="card-title">Harga Tertinggi</div>
            <div class="card-value">
                Rp {{ number_format($data->max('harga')) }}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3">
            <div class="card-title">Harga Terendah</div>
            <div class="card-value">
                Rp {{ number_format($data->min('harga')) }}
            </div>
        </div>
    </div>
</div>

<!-- GRAFIK -->
<div class="card p-4 mb-4">
    <h6 class="fw-bold mb-3">Grafik Perkembangan Harga</h6>
    <canvas id="hargaChart" height="90"></canvas>
</div>

<!-- TABEL DATA -->
<div class="card p-4">
    <h6 class="fw-bold mb-3">Data Harga Pangan</h6>

    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Komoditas</th>
                    <th>Pasar</th>
                    <th>Wilayah</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                <tr>
                    <td>{{ $row->tanggal }}</td>
                    <td>{{ $row->komoditas->nama_komoditas }}</td>
                    <td>{{ $row->pasar->nama_pasar }}</td>
                    <td>{{ $row->pasar->wilayah->nama_wilayah }}</td>
                    <td class="fw-bold text-primary">
                        Rp {{ number_format($row->harga) }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- SCRIPT GRAFIK -->
<script>
const ctx = document.getElementById('hargaChart');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: {!! json_encode($data->pluck('tanggal')) !!},
        datasets: [{
            label: 'Harga',
            data: {!! json_encode($data->pluck('harga')) !!},
            borderWidth: 3,
            tension: 0.4,
            fill: false
        }]
    }
});
</script>

@endsection
