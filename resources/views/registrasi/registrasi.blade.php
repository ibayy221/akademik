@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">
        <h2 class="text-xl font-semibold mb-4"> Data Pendidikan & Upload Dokumen</h2>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-3 rounded mb-4">{{ session('success') }}</div>
        @endif

        <form action="{{ route('registrasi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium">Asal Sekolah SD</label>
                    <input type="text" name="asal_sd" value="{{ old('asal_sd') }}" class="mt-1 block w-full border rounded px-3 py-2" placeholder="SDN 1">
                    @error('asal_sd') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium">Asal Sekolah SMP</label>
                    <input type="text" name="asal_smp" value="{{ old('asal_smp') }}" class="mt-1 block w-full border rounded px-3 py-2" placeholder="SMPN 2">
                    @error('asal_smp') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium">Asal Sekolah SMA</label>
                    <input type="text" name="asal_sma" value="{{ old('asal_sma') }}" class="mt-1 block w-full border rounded px-3 py-2" placeholder="SMAN 3">
                    @error('asal_sma') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium">Upload Kartu Keluarga (KK)</label>
                    <input type="file" name="kk" class="mt-1 block w-full" />
                    @if(isset($registrasi) && $registrasi->kk_path)
                        <p class="text-sm">File saat ini: <a href="{{ asset('storage/'.$registrasi->kk_path) }}" target="_blank" class="text-blue-600">Lihat KK</a></p>
                    @endif
                    @error('kk') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium">Upload Ijazah Terakhir</label>
                    <input type="file" name="ijazah" class="mt-1 block w-full" />
                    @if(isset($registrasi) && $registrasi->ijazah_path)
                        <p class="text-sm">File saat ini: <a href="{{ asset('storage/'.$registrasi->ijazah_path) }}" target="_blank" class="text-blue-600">Lihat Ijazah</a></p>
                    @endif
                    @error('ijazah') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div class="flex items-center justify-between">
                    <a href="#" class="text-sm text-gray-600">&larr; Kembali ke Step 2</a>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Simpan & Lanjut Step 4</button>
                </div>
            </div>
        </form>
    </div>
@endsection
