@extends('layout')

@section('title', 'Halaman Dashboard')
@section('header', 'Dashboard')
@section('content')
 <div class="row">
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col mt-0">
                        <h5 class="card-title">Buah</h5>
                    </div>
                    <div class="col-auto">
                        <div class="stat text-primary">
                            <i class="align-middle" data-feather="droplet"></i>
                        </div>
                    </div>
                </div>
                <h1 class="mt-1 mb-3">1</h1>
                <div class="mb-0">
                    <span class="text-muted">Jumlah Data Buah</span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col mt-0">
                        <h5 class="card-title">Gas</h5>
                    </div>
                    <div class="col-auto">
                        <div class="stat text-primary">
                            <i class="align-middle" data-feather="wind"></i>
                        </div>
                    </div>
                </div>
                <h1 class="mt-1 mb-3">1</h1>
                <div class="mb-0">
                    <span class="text-muted">Jumlah Data Gas</span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col mt-0">
                        <h5 class="card-title">Suhu</h5>
                    </div>
                    <div class="col-auto">
                        <div class="stat text-primary">
                            <i class="align-middle" data-feather="thermometer"></i>
                        </div>
                    </div>
                </div>
                <h1 class="mt-1 mb-3">{{$jumlahDataSuhu}}</h1>
                <div class="mb-0">
                    <span class="text-muted">Jumlah Data Suhu</span>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="col-xl-6 col-xxl-7">
                <div class="card flex-fill w-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Suhu</h5>
                    </div>
                    <div class="card-body pt-2 pb-3">
                        <div class="chart chart-sm">
                            <canvas id="chartjs-dashboard-line"></canvas>
                        </div>
                    </div>
                </div>
</div> --}}
<div style="width: 80%;">
    <canvas id="myChart"></canvas>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Ambil data dari route yang telah Anda buat
        fetch('/chart-data')
            .then(response => response.json())
            .then(data => {
                // Ubah data sesuai dengan kebutuhan Anda
                var labels = data.map(entry => entry.created_at);
                var values = data.map(entry => entry.nilaisuhu);

                // Gambar chart menggunakan Chart.js
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Data Suhu',
                            data: values,
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            x: {
                                type: 'time',
                                time: {
                                    unit: 'day'
                                }
                            },
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            });
    });
</script>

@endsection
