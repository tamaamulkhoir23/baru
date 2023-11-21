@extends('layout')

@section('title', 'Tambah Data Buah')
@section('header', 'Tambah Data Buah')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">Edit Data Buah</h2>
        </div>
        <div class="card-body">
            {{-- Form untuk mengedit data buah --}}
            <form action="{{ route('buah.update', $buah->id) }}" method="post">
                @csrf
                @method('PUT')

                {{-- Input Nama Buah --}}
                <div class="mb-3">
                    <label for="namabuah" class="form-label">Nama Buah</label>
                    <input type="text" name="namabuah" id="namabuah" class="form-control" value="{{ $buah->namabuah }}" required>
                </div>

                {{-- Input Berat buah --}}
                <div class="mb-3">
                    <label for="beratbuah" class="form-label">Berat buah</label>
                    <input type="text" name="beratbuah" id="beratbuah" class="form-control" value="{{ $buah->beratbuah }}" required>
                </div>

                {{-- Tombol Submit --}}
                <div class="col">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('databuah') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

