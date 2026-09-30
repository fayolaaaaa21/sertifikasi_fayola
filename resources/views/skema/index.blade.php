@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Data Skema Sertifikasi</h3>
    <a href="{{ route('skema.create') }}" class="btn btn-pink">+ Tambah Skema</a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body">
        <table class="table table-bordered table-striped align-middle">
            <thead class="bg-pink text-white">
                <tr>
                    <th width="50">No</th>
                    <th>Kode Skema</th>
                    <th>Nama Skema</th>
                    <th>Deskripsi</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($skemas as $index => $s)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td><strong>{{ $s->kode_skema }}</strong></td>
                    <td>{{ $s->nama_skema }}</td>
                    <td>{{ $s->deskripsi ?? '-' }}</td>
                    <td>
                        <a href="{{ route('skema.edit', $s->id) }}" class="btn btn-sm btn-pink">Edit</a>
                        <form action="{{ route('skema.destroy', $s->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus skema ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-pink">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data skema sertifikasi.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection