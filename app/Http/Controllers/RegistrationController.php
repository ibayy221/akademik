<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RegistrationController extends Controller
{
    public function show()
    {
        // If you have a model for registrations you can load it here; for now we just show the form
        return view('registrasi.registrasi');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'asal_sd' => 'nullable|string|max:255',
            'asal_smp' => 'nullable|string|max:255',
            'asal_sma' => 'nullable|string|max:255',
            'kk' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'ijazah' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        if ($request->hasFile('kk')) {
            $path = $request->file('kk')->store('registrasi/kk', 'public');
            $data['kk_path'] = $path;
        }

        if ($request->hasFile('ijazah')) {
            $path = $request->file('ijazah')->store('registrasi/ijazah', 'public');
            $data['ijazah_path'] = $path;
        }

        // TODO: persist $data to database if needed. For now we just flash success.
        return back()->with('success', 'Data pendidikan berhasil disimpan');
    }
}
