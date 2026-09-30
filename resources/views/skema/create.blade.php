@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3 fw-bold fs-5">
                Tambah Skema Sertifikasi
            </div>
            <div class="card-body">
                <form action="{{ route('skema.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Kode Skema</label>
                        <input type="text" name="kode_skema" class="form-control @error('kode_skema') is-invalid @enderror" value="{{ old('kode_skema') }}" placeholder="Contoh: SKM-JWD-001" required>
                        @error('kode_skema')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nama Skema</label>
                        <input type="text" name="nama_skema" class="form-control @error('nama_skema') is-invalid @enderror" value="{{ old('nama_skema') }}" placeholder="Contoh: Junior Web Developer" required>
                        @error('nama_skema')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="4" placeholder="Masukkan deskripsi skema sertifikasi">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between pt-2">
                        <a href="{{ route('skema.index') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-pink">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection