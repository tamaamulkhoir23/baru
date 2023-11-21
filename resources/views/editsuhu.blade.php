@extends('layout')

@section('title', 'Tambah Data Suhu')
@section('header', 'Tambah Data Suhu')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">Edit Data Suhu</h2>
        </div>
        <div class="card-body">
            {{-- Form untuk mengedit data suhu --}}
            <form action="{{ route('suhu.update', $suhu->id) }}" method="post">
                @csrf
                @method('PUT')

                {{-- Input Nama Sensor --}}
                <div class="mb-3">
                    <label for="namasensor" class="form-label">Nama Sensor</label>
                    <input type="text" name="namasensor" id="namasensor" class="form-control" value="{{ $suhu->namasensor }}" required>
                </div>

                {{-- Input Nilai Suhu --}}
                <div class="mb-3">
                    <label for="nilaisuhu" class="form-label">Nilai Suhu</label>
                    <input type="text" name="nilaisuhu" id="nilaisuhu" class="form-control" value="{{ $suhu->nilaisuhu }}" required>
                </div>

                {{-- Tombol Submit --}}
                <div class="col">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('datasuhu') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

