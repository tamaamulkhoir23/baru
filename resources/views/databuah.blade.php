@extends('layout')

@section('title', 'Data Buah')
@section('header', 'Data Buah')
@section('content')
<div class="container">
    <button class="btn btn-primary mb-4" onclick="location.href='/tambah-data'">Tambah Data</button>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Buah</th>
                <th>Berat Buah (gram)</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Buah Tomat</td>
                <td>250</td>
                <td>
                    <a class ="btn btn-warning" href="editgas">Edit</a>
                    <a class ="btn btn-danger" href="hapusgas">Hapus</a>
                </td>
            </tr>
            <!-- Tambahkan baris-baris data lainnya di sini -->
        </tbody>
    </table>
</div>
@endsection

