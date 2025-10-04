<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <title>{{ config('app.name', 'Sistem Akademik LP3I') }}</title>
            @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
                @vite(['resources/css/app.css', 'resources/js/app.js'])
            @endif
        </head>
        <body class="min-h-screen bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 font-sans">
            <div class="max-w-6xl mx-auto px-6 py-12">
                <header class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center text-white font-bold">LP</div>
                        <div>
                            <h1 class="text-xl font-semibold">Sistem Akademik LP3I</h1>
                            <p class="text-sm text-gray-600 dark:text-gray-300">Manajemen data mahasiswa, dosen, kelas, dan mata kuliah</p>
                        </div>
                    </div>

                    <nav class="space-x-3">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="px-4 py-2 bg-gray-800 text-white rounded">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="px-4 py-2 border rounded text-gray-800 dark:text-gray-100">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="px-4 py-2 bg-red-600 text-white rounded">Register</a>
                                @endif
                            @endauth
                        @endif
                    </nav>
                </header>

                <main class="mt-12 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <section>
                        <h2 class="text-3xl font-bold mb-4">Selamat datang di Sistem Akademik LP3I</h2>
                        <p class="mb-6 text-gray-600 dark:text-gray-300">Aplikasi sederhana untuk mengelola data akademik: mahasiswa, dosen, kelas, dan mata kuliah. Cepat, ringan, dan mudah disesuaikan.</p>

                        <div class="grid grid-cols-2 gap-3 max-w-sm">
                            <a href="{{ route('mahasiswa.index') }}" class="block px-4 py-3 bg-gray-100 dark:bg-gray-800 rounded">Mahasiswa</a>
                            <a href="{{ route('dosen.index') }}" class="block px-4 py-3 bg-gray-100 dark:bg-gray-800 rounded">Dosen</a>
                            <a href="{{ route('kelas.index') }}" class="block px-4 py-3 bg-gray-100 dark:bg-gray-800 rounded">Kelas</a>
                            <a href="{{ route('matakuliah.index') }}" class="block px-4 py-3 bg-gray-100 dark:bg-gray-800 rounded">Mata Kuliah</a>
                        </div>

                        <p class="mt-6 text-sm text-gray-500">Butuh fitur custom atau integrasi lain? Hubungi tim IT LP3I untuk penambahan modul dan penyesuaian.</p>
                    </section>

                    <aside class="p-6 rounded-lg bg-gray-50 dark:bg-gray-800 shadow">
                        <h3 class="text-lg font-medium mb-3">Statistik Singkat</h3>
                        <ul class="space-y-2 text-gray-700 dark:text-gray-200">
                            <li>Jumlah Mahasiswa: <strong>{{ App\Models\Mahasiswa::count() }}</strong></li>
                            <li>Jumlah Dosen: <strong>{{ App\Models\Dosen::count() }}</strong></li>
                            <li>Jumlah Kelas: <strong>{{ App\Models\Kelas::count() }}</strong></li>
                            <li>Jumlah Mata Kuliah: <strong>{{ App\Models\Matakuliah::count() }}</strong></li>
                        </ul>

                        <div class="mt-6">
                            <a href="{{ route('mahasiswa.index') }}" class="inline-block px-4 py-2 bg-red-600 text-white rounded">Mulai Kelola Data</a>
                        </div>
                    </aside>
                </main>

                <footer class="mt-12 text-center text-sm text-gray-500">© {{ date('Y') }} LP3I - Sistem Akademik</footer>
            </div>
        </body>
    </html>

    </body>
</html>
