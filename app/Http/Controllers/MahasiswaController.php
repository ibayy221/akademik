<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function destroy($id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus');
    }
    public function index() {
        $data = Mahasiswa::all();
        return view('mahasiswa.index', compact('data'));
    }

    public function store(Request $request) {
        Mahasiswa::create($request->only('nama', 'nim'));
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
