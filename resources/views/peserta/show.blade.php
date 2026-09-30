@extends('layouts.app')

@section('content')
<div class="card border-0 shadow-sm col-md-6 mx-auto">
    <div class="card-header bg-white font-weight-bold">Detail Peserta</div>
    <div class="card-body">
        <table class="table table-borderless">
            <tr><th>Nama</th><td>: {{ $peserta->nama_peserta }}</td></tr>
            <tr><th>Email</th><td>: {{ $peserta->email }}</td></tr>
            <tr><th>No HP</th><td>: {{ $peserta->no_hp }}</td></tr>
            <tr><th>Jenis Kelamin</th><td>: {{ $peserta->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td></tr>
            <tr><th>Alamat</th><td>: {{ $peserta->alamat }}</td></tr>
            <tr><th>Skema Diikuti</th><td>: <span class="badge bg-primary">{{ $peserta->skema->nama_skema }}</span></td></tr>
        </table>
        <a href="{{ route('peserta.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection