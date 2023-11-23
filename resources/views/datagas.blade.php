@extends('layout')

@section('title', 'Data Periodik')
@section('header', 'Data Pemantauan Periodik')
@section('content')
<div class="container">
<h2 class="mb-5">Data Gas</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nilai Gas</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gas as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->nilaigas }}</td>
                <td>{{ $data->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection

