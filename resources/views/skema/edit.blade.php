@extends('layouts.app')

@section('content')
<div class="card border-0 shadow-sm col-md-6 mx-auto">
    <div class="card-header bg-white fw-bold">Edit Skema Sertifikasi</div>
    <div class="card-body">
        <form action="{{ route('skema.update', $skema->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label class="form-label">Kode Skema</label>
                <input type="text" name="kode_skema" class="form-control @error('kode_skema') is-invalid @enderror" value="{{ old('kode_skema', $skema->kode_skema) }}">
                @error('kode_skema') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Skema</label>
                <input type="text" name="nama_skema" class="form-control @error('nama_skema') is-invalid @enderror" value="{{ old('nama_skema', $skema->nama_skema) }}">
                @error('nama_skema') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="3">{{ old('deskripsi', $skema->deskripsi) }}</textarea>
            </div>

            <button type="submit" class="btn btn-pink">Update</button>
            <a href="{{ route('skema.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection