<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
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
}
