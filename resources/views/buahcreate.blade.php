@extends('layout')

@section('title', 'Tambah Data Buah')
@section('header', 'Tambah Data Buah')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">Tambah Data Buah</h2>
        </div>
        <div class="card-body">
            {{-- Form untuk menambah data buah --}}
            <form action="{{ route('buah.store') }}" method="post">
                @csrf
                {{-- Input Nama Buah --}}
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Buah</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>

                {{-- Input Berat buah --}}
                <div class="mb-3">
                    <label for="beratbuah" class="form-label">Berat Buah</label>
                    <input type="text" name="berat" id="berat" class="form-control" required>
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

