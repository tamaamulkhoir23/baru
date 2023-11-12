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
                <th>Jenis Gas</th>
                <th>Nilai Gas (ppm)</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Sensor Gas</td>
                <td>Gas</td>
                <td>350</td>
                <td>
                    <a class ="btn btn-warning" href="editgas">Edit</a>
                    <a class ="btn btn-danger" href="hapusgas">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

