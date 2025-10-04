<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data Mahasiswa') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        {{-- Form tambah mahasiswa --}}
        <div class="bg-white dark:bg-gray-10 overflow-hidden shadow-sm sm:rounded-lg mb-6">
            <div class="p-6 text-gray-900 dark:text-black-100">
                <h3 class="font-semibold text-lg mb-4">Mahasiswa</h3>
                <form method="POST" action="{{ route('mahasiswa.store') }}" class="space-y-4">
                    @csrf
                    <input type="text" name="nim" placeholder="NIM" class="border-gray-300 rounded-md w-full">
                    <input type="text" name="nama" placeholder="Nama" class="border-gray-300 rounded-md w-full">
                    <select name="kelas_id" class="border-gray-300 rounded-md w-full">
                        <option value="">-- Pilih Kelas --</option>
                        @foreach ($kelas as $kls)
                            <option value="{{ $kls->id }}">{{ $kls->namaKelas }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                        Simpan
                    </button>
                </form>
            </div>
        </div>

        {{-- List mahasiswa --}}
        <div class="bg-white dark:bg-gray-81 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-black-100">
                <h3 class="font-semibold text-lg mb-4">List Mahasiswa</h3>
                <table class="table-auto w-full border">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="px-4 py-2 border">NIM</th>
                            <th class="px-4 py-2 border">Nama</th>
                            <th class="px-4 py-2 border">Kelas</th>
                            <th class="px-4 py-2 border">Aksi</th>
                            <!-- Tombol edit dipindah ke dalam baris data -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $mhs)
                            <tr>
                                <th class="border px-4 py-2">{{ $mhs->nim }}</th>
                                <th class="border px-4 py-2">{{ $mhs->nama }}</th>
                                <th class="border px-4 py-2">{{ $mhs->kelas->nama_kelas ?? '-' }}</th>
                                <th class="border px-4 py-2 flex gap-2">
                                    <a href="{{ route('mahasiswa.edit', $mhs->nim) }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-yellow-600">Edit</a>
                                    <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Hapus</button>
                                    </form>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>