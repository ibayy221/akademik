<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data Mahasiswa') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        {{-- Form tambah matakuliah --}}
        <div class="bg-white dark:bg-gray-80 overflow-hidden shadow-sm sm:rounded-lg mb-6">
            <div class="p-6 text-gray-900 dark:text-black-100">
                <h3 class="font-semibold text-lg mb-4">Matakuliah</h3>
                <form method="POST" action="{{ route('matakuliah.store') }}" class="space-y-4">
                    @csrf
                    <input type="text" name="namaMatkul" placeholder="Nama Matakuliah" class="border-gray-300 rounded-md w-full text-gray-900">
                    <input type="text" name="deskripsi" placeholder="Deskripsi" class="border-gray-300 rounded-md w-full text-gray-900">
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                        Simpan
                    </button>
                </form>
            </div>
        </div>

        {{-- List matakuliah --}}
        <div class="bg-white dark:bg-gray-80 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-black-100">
                <h3 class="font-semibold text-lg mb-4">List Matakuliah</h3>
                <table class="table-auto w-full border">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="px-4 py-2 border">Nama Matakuliah</th>
                            <th class="px-4 py-2 border">Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $mk)
                            <tr>
                                <th class="border px-4 py-2">{{ $mk->namaMatkul }}</th>
                                <th class="border px-4 py-2">{{ $mk->deskripsi }}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>