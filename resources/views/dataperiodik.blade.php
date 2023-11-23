@extends('layout')

@section('title', 'Data Periodik')
@section('header', 'Data Pemantauan Periodik')
@section('content')
<div class="container">
<h2 class="mb-5">Data Pengukuran Periodik</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Buah</th>
                <th>Nilai Suhu (°C)</th>
                <th>Nilai Gas (ppm)</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            @php
                $nomor = 1;
            @endphp
        
            @foreach($buahs as $buah)
                @foreach($buah->suhu as $key => $suhu)
                    @if(isset($buah->gas[$key]))
                        @php
                            $gas = $buah->gas[$key];
                        @endphp
                        <tr>
                            <td>{{ $nomor++ }}</td>
                            <td>{{ $buah->id }}</td>
                            <td>{{ $suhu->nilaisuhu }}</td>
                            <td>{{ $gas->nilaigas }}</td>
                            <td>{{ $gas->created_at }}</td>
                        </tr>
                    @endif
                @endforeach
            @endforeach
        </tbody>
    </table>
</div>
@endsection

