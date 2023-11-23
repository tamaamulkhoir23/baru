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
                <td>{{ $data->nama }}</td>
                <th>{{ $data->berat}}</th>
                <td>
                    <div class="btn-group" role="group">
                        <a class="btn btn-warning btn-sm" style="margin: 5px" href="{{ route('buah.edit', ['id' => $data->id]) }}">Edit</a>
                    
                        <form action="{{ route('buah.destroy', $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="margin: 5px" class="btn btn-danger btn-sm ml-2">Hapus</button>
                        </form>
                    
                        <div class="btn-group" role="group">
                            @if($data->is_researched)
                                <a href="{{ route('buah.researchOff', ['id' => $data->id]) }}" style="margin: 5px" class="btn btn-danger btn-sm ml-2">Turn Off</a>
                            @else
                                <a href="{{ route('buah.researchOn', ['id' => $data->id]) }}" style="margin: 5px" class="btn btn-success btn-sm ml-2">Turn On</a>
                            @endif
                        </div>
                    </div>
                    
                        
                    </div>                    
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection

