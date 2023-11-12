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

<div class="col-xl-6 col-xxl-7">
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
</div>
@endsection
