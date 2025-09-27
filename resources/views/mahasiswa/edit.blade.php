<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Mahasiswa') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        {{-- Form edit mahasiswa --}}
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h3 class="font-semibold text-lg mb-4">Edit Mahasiswa</h3>
                <form method="POST" action="{{ route('mahasiswa.update', $data->id) }}" class="space-y-4">
                    @csrf
                    @method('PUT')
                    <input type="text" name="nim" value="{{ $data->nim }}" placeholder="NIM" class="border-gray-300 rounded-md w-full">
                    <input type="text" name="nama" value="{{ $data->nama }}" placeholder="Nama" class="border-gray-300 rounded-md w-full">
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                        Update
                    </button>
                </form>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>