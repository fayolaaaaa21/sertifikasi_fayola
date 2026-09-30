<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Skema;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    // 1. Tampilkan Semua Data Peserta
    public function index()
    {
        $peserta = Peserta::with('skema')->latest()->get();
        return view('peserta.index', compact('peserta'));
    }

    // 2. Form Tambah Peserta
    public function create()
    {
        $skemas = Skema::all();
        return view('peserta.create', compact('skemas'));
    }

    // 3. Simpan Peserta Baru
    public function store(Request $request)
    {
        $request->validate([
            'skema_id' => 'required',
            'nama_peserta' => 'required',
            'email' => 'required|email|unique:pesertas,email',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ]);

        Peserta::create($request->all());

        return redirect()->route('peserta.index')->with('success', 'Data peserta berhasil ditambahkan!');
    }

    // 4. Form Edit Peserta
    public function edit(Peserta $peserta)
    {
        $skemas = Skema::all();
        return view('peserta.edit', compact('peserta', 'skemas'));
    }

    // 5. Update Data Peserta
    public function update(Request $request, Peserta $peserta)
    {
        $request->validate([
            'skema_id' => 'required',
            'nama_peserta' => 'required',
            'email' => 'required|email|unique:pesertas,email,' . $peserta->id,
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ]);

        $peserta->update($request->all());

        return redirect()->route('peserta.index')->with('success', 'Data peserta berhasil diperbarui!');
    }

    // 6. Hapus Data Peserta
    public function destroy(Peserta $peserta)
    {
        $peserta->delete();
        return redirect()->route('peserta.index')->with('success', 'Data peserta berhasil dihapus!');
    }
}