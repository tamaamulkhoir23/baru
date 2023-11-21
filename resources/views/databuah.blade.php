@extends('layout')

@section('title', 'Data Buah')
@section('header', 'Data Buah')
@section('content')
<div class="container">
    <button class="btn btn-primary mb-4" onclick="location.href='{{ route('buah.create') }}'">Tambah Data</button>

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
            @foreach ($buah as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->namabuah }}</td>
                <th>{{ $data->beratbuah }}</th>
                <td>
                    <div class="btn-group" role="group">
                        <a class="btn btn-warning btn-sm" href="{{ route('buah.edit', ['id' => $data->id]) }}" style="width: 60px; margin-right: 5px;">Edit</a>
                        <form action="{{ route('buah.destroy', $data->id) }}" method="POST">
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

