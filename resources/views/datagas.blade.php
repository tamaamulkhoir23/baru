@extends('layout')

@section('title', 'Data Periodik')
@section('header', 'Data Pemantauan Periodik')
@section('content')
<div class="container">
    <button class="btn btn-primary mb-4" onclick="location.href='{{ route('gas.create') }}'">Tambah Data</button>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Sensor</th>
                <th>Jenis Gas</th>
                <th>Nilai Gas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gas as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->namasensor }}</td>
                <th>{{ $data->jenisgas }}</th>
                <td>{{ $data->nilaigas }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a class="btn btn-warning btn-sm" href="{{ route('gas.edit', ['id' => $data->id]) }}" style="width: 60px; margin-right: 5px;">Edit</a>
                        <form action="{{ route('gas.destroy', $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" style="background-color: red; width: 60px;">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection

