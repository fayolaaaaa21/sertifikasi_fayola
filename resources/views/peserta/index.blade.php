@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Data Peserta Sertifikasi</h3>
    <a href="{{ route('peserta.create') }}" class="btn btn-pink">+ Tambah Peserta</a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body">
        <table class="table table-bordered table-striped align-middle">
            <thead class="bg-pink text-white">
                <tr>
                    <th width="50">No</th>
                    <th>Nama Peserta</th>
                    <th>Skema Sertifikasi</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>L/P</th>
                    <th width="180">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($peserta as $index => $p)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td><strong>{{ $p->nama_peserta }}</strong></td>
                    <td>{{ $p->skema->nama_skema ?? '-' }}</td>
                    <td>{{ $p->email }}</td>
                    <td>{{ $p->no_hp }}</td>
                    <td>{{ $p->jenis_kelamin }}</td>
                    <td>
                        <a href="{{ route('peserta.edit', $p->id) }}" class="btn btn-sm btn-pink">Edit</a>
                        <form action="{{ route('peserta.destroy', $p->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus data peserta ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-pink">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">Belum ada data peserta.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection