@extends('layouts.app')

@section('content')
<div class="card border-0 shadow-sm col-md-8 mx-auto">
    <div class="card-header bg-white fw-bold">Edit Data Peserta</div>
    <div class="card-body">
        <form action="{{ route('peserta.update', $peserta->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Pilih Skema Sertifikasi</label>
                <select name="skema_id" class="form-select @error('skema_id') is-invalid @enderror">
                    @foreach($skemas as $s)
                        <option value="{{ $s->id }}" {{ $peserta->skema_id == $s->id ? 'selected' : '' }}>
                            {{ $s->kode_skema }} - {{ $s->nama_skema }}
                        </option>
                    @endforeach
                </select>
                @error('skema_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="nama_peserta" class="form-control @error('nama_peserta') is-invalid @enderror" value="{{ old('nama_peserta', $peserta->nama_peserta) }}">
                @error('nama_peserta') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $peserta->email) }}">
                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">No HP</label>
                <input type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" value="{{ old('no_hp', $peserta->no_hp) }}">
                @error('no_hp') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select @error('jenis_kelamin') is-invalid @enderror">
                    <option value="L" {{ $peserta->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="P" {{ $peserta->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                </select>
                @error('jenis_kelamin') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat', $peserta->alamat) }}</textarea>
                @error('alamat') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn btn-pink">Update</button>
            <a href="{{ route('peserta.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection