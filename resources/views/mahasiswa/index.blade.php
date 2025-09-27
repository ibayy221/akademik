<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data Mahasiswa') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        {{-- Form tambah mahasiswa --}}
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h3 class="font-semibold text-lg mb-4">Mahasiswa</h3>
                <form method="POST" action="{{ route('mahasiswa.store') }}" class="space-y-4">
                    @csrf
                    <input type="text" name="nim" placeholder="NIM" class="border-gray-300 rounded-md w-full">
                    <input type="text" name="nama" placeholder="Nama" class="border-gray-300 rounded-md w-full">
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                        Simpan
                    </button>
                </form>
            </div>
        </div>

        {{-- List mahasiswa --}}
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h3 class="font-semibold text-lg mb-4">List Mahasiswa</h3>
                <table class="table-auto w-full border">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="px-4 py-2 border">NIM</th>
                            <th class="px-4 py-2 border">Nama</th>
                            <!-- Tombol edit dipindah ke dalam baris data -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $mhs)
                            <tr>
                                <th class="border px-4 py-2">{{ $mhs->nim }}</th>
                                <th class="border px-4 py-2">{{ $mhs->nama }}</th>
                                <th class="border px-4 py-2">
                                    <a href="{{ route('mahasiswa.edit', $mhs->nim) }}" class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">Edit</a>
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