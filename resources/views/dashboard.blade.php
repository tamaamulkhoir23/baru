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
                <h1 class="mt-1 mb-3">{{$jumlahDataBuah}}</h1>
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
                <h1 class="mt-1 mb-3">{{$jumlahDataGas}}</h1>
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

<div class="row">
    <!-- Chart 1 -->
    <div class="col-xl-6 col-xxl-6">
        <div class="card flex-fill w-100">
            <div class="card-header">
                <div class="float-end">
                    <form class="row g-2">
                        <div class="col-auto">
                            <select class="form-select form-select-sm bg-light border-0">
                                <option></option>
                            </select>
                        </div>
                    </form>
                </div>
                <h5 class="card-title mb-0">Data Suhu</h5>
            </div>
            <div class="card-body pt-2 pb-3">
                <div class="chart chart-sm">
                    <div style="width: 100%;">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart 2 -->
    <div class="col-xl-6 col-xxl-6">
        <div class="card flex-fill w-100">
            <div class="card-header">
                <div class="float-end">
                    <form class="row g-2">
                        <div class="col-auto">
                            <select class="form-select form-select-sm bg-light border-0">
                                <option></option>
                            </select>
                        </div>
                    </form>
                </div>
                <h5 class="card-title mb-0">Data Gas</h5>
            </div>
            <div class="card-body pt-2 pb-3">
                <div class="chart chart-sm">
                    <div style="width: 100%;">
                        <canvas id="myOtherChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Ambil data untuk Chart 1
        fetch('/chart-data')
            .then(response => response.json())
            .then(data => {
                var labels = data.map(entry => entry.created_at);
                var values = data.map(entry => entry.nilaisuhu);

                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Data Suhu',
                            data: values,
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 3
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

        // Ambil data untuk Chart 2
        fetch('/chart-data2')
            .then(response => response.json())
            .then(data => {
                var labels = data.map(entry => entry.created_at);
                var values = data.map(entry => entry.nilaigas);

                var ctx = document.getElementById('myOtherChart').getContext('2d');
                var myOtherChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Data Gas',
                            borderColor: window.theme.primary,
                            data: values,
                            borderWidth: 3
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
