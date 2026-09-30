@extends('layouts.app')

@section('content')
    <h3 class="mb-4">Dashboard Administrator</h3>
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card bg-pink text-white border-0 shadow-sm mb-3">
                <div class="card-body">
                    <h5>Total Skema Sertifikasi</h5>
                    <h2>{{ $totalSkema }}</h2>
                    <a href="{{ route('skema.index') }}" class="text-white text-decoration-none fw-bold">Kelola Skema →</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card bg-pink text-white border-0 shadow-sm mb-3">
                <div class="card-body">
                    <h5>Total Peserta Sertifikasi</h5>
                    <h2 class="fw-bold">{{ $totalPeserta }}</h2>
                    <a href="{{ route('peserta.index') }}" class="text-white text-decoration-none">Kelola Peserta &rarr;</a>
                </div>
            </div>
        </div>
    </div>
@endsection