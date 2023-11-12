@extends('layout')

@section('title', 'Data Periodik')
@section('header', 'Data Pemantauan Periodik')
@section('content')
<div class="container">
    <button class="btn btn-primary mb-4" onclick="location.href='/tambah-data'">Tambah Data</button>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Sensor</th>
                <th>Nilai Suhu (°C)</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
   
            @foreach ($suhu as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->namasensor }}</td>
                <td>{{ $data->nilaisuhu }}</td>
                <td>
                    <a class ="btn btn-warning" href="editgas">Edit</a>
                    <a class ="btn btn-danger" href="hapusgas">Hapus</a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>
@endsection

