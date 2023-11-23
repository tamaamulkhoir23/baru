@extends('layout')

@section('title', 'Data Periodik')
@section('header', 'Data Pemantauan Periodik')
@section('content')
<div class="container">
    <h2 class="mb-5">Data Suhu</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nilai Suhu (°C)</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
   
            @foreach ($suhu as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->nilaisuhu }}</td>
                <td>{{ $data->created_at }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>
@endsection

