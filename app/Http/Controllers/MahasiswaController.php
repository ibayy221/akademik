<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Kelas;

class MahasiswaController extends Controller
{
    public function destroy($id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus');
    }
    public function index() {
        // $data = Mahasiswa::all();
        // return view('mahasiswa.index', compact('data'));
        $data = Mahasiswa ::with('kelas')->get();
        $kelas = Kelas::all();
        return view('mahasiswa.index', compact('data', 'kelas'));
    }
    public function store(Request $request) {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
        ]);
        mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas_id' => $request->kelas_id,
        ]);
        return redirect()->back()->with('success', 'Data mahasiswa berhasil ditambahkan');

        Mahasiswa::create($request->only('nama', 'nim', 'kelas_id'));
        return redirect()->back();
    }

    public function edit($nim) {
        $data = Mahasiswa::where('nim', $nim)->firstOrFail();
        return view('mahasiswa.edit', compact('data'));
    }

    public function update(Request $request, $id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->only('nim', 'nama'));
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diupdate');
    }
}
