<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data Kelas') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        {{-- Form tambah kelas --}}
        <div class="bg-white dark:bg-gray-20 overflow-hidden shadow-sm sm:rounded-lg mb-6">
            <div class="p-6 text-black-900 dark:text-black-100">
                <h3 class="font-semibold text-lg mb-4">Kelas</h3>
                <form method="POST" action="{{ route('kelas.store') }}" class="space-y-4">
                    @csrf
                    <input type="text" name="namaKelas" placeholder="Nama Kelas" class="border-gray-300 rounded-md w-full text-gray-900">
                    <input type="text" name="kapasitas" placeholder="Kapasitas" class="border-gray-300 rounded-md w-full text-gray-900">
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                        Simpan
                    </button>
                </form>
            </div>
        </div>

        {{-- List kelas --}}
        <div class="bg-white dark:bg-gray-20 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-black-900 dark:text-black-100">
                <h3 class="font-semibold text-lg mb-4">List Kelas</h3>
                <table class="table-auto w-full border">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="px-4 py-2 border">Nama Kelas</th>
                            <th class="px-4 py-2 border">Kapasitas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $kls)
                            <tr>
                                <th class="border px-4 py-2">{{ $kls->namaKelas }}</th>
                                <th class="border px-4 py-2">{{ $kls->kapasitas }}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>