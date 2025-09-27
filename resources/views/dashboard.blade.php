<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Portfolio') }}
        </h2>
    </x-slot>

    <body class="bg-gradient-to-br from-indigo-50 via-white to-indigo-100 text-gray-800">

    <div class="container mx-auto max-w-5xl bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl my-10 p-8 sm:p-12">

        <!-- Bagian Header -->
        <header class="flex flex-col sm:flex-row items-center gap-8 border-b border-gray-200 pb-8">
            <div class="w-36 h-36 flex-shrink-0">
                <img src="https://placehold.co/250x250/E0E7FF/4F46E5?text=Ibay" 
                     alt="Foto Profil Ibay" 
                     class="rounded-full object-cover w-full h-full border-4 border-indigo-200 shadow-lg">
            </div>
            <div class="text-center sm:text-left">
                <h1 class="text-4xl font-bold text-gray-900">Bayu Setiaji (Ibay)</h1>
                <p class="text-lg font-medium text-indigo-600 mt-2">Mahasiswa Application Software Engineering</p>
                <div class="mt-4 flex flex-wrap justify-center sm:justify-start gap-x-6 gap-y-2 text-gray-600">
                    <a href="mailto:ibay.setiaji@example.com" class="flex items-center gap-2 hover:text-indigo-600 transition-colors">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25..."/></svg>
                        <span>bayusetiaji.lp3i.krw24@gmail.com</span>
                    </a>
                    <a href="#" class="flex items-center gap-2 hover:text-indigo-600 transition-colors">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284..."/></svg>
                        <span>085891602476</span>
                    </a>
                </div>
            </div>
        </header>

        <main class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-12">
            <!-- Kolom Kiri -->
            <div class="md:col-span-2 space-y-10">
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 border-b-2 border-indigo-200 pb-2">Tentang Saya</h2>
                    <p class="mt-4 text-gray-700 leading-relaxed">
                        Halo, aku <span class="font-semibold text-indigo-600">Ibay</span> 👋, seorang mahasiswa Application Software Engineering di LP3I Karawang. 
                        Dari kecil aku udah suka banget sama teknologi. Waktu SMK aku fokus di jurusan TKJ, sekarang aku makin mendalami dunia pemrograman, khususnya 
                        <span class="font-semibold">PHP</span> dan <span class="font-semibold">JavaScript</span> buat pengembangan web.  
                        Goal aku? Jadi developer yang bisa bikin aplikasi bermanfaat dan keren buat banyak orang 🚀.
                    </p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-gray-900 border-b-2 border-indigo-200 pb-2">Proyek Pilihan</h2>
                    <div class="mt-6 space-y-6">
                    
                        <div>
                            <h3 class="text-lg font-semibold text-indigo-700">
                                <a href="#" class="hover:text-indigo-500 hover:underline">Sistem Informasi Sekolah (Team Project)</a>
                            </h3>
                            <p class="mt-2 text-gray-700">
                                Proyek bareng tim buat bikin sistem informasi sekolah berbasis web menggunakan <span class="font-semibold">PHP</span> dan <span class="font-semibold">MySQL</span>.  
                                Fitur meliputi manajemen siswa, guru, jadwal, dan laporan nilai.
                            </p>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Kolom Kanan -->
            <div class="space-y-10">
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 border-b-2 border-indigo-200 pb-2">Keahlian</h2>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="bg-indigo-100 text-indigo-800 text-sm font-semibold px-3 py-1.5 rounded-full">Next.js</span>
                        <span class="bg-indigo-100 text-indigo-800 text-sm font-semibold px-3 py-1.5 rounded-full">React</span>
                        <span class="bg-indigo-100 text-indigo-800 text-sm font-semibold px-3 py-1.5 rounded-full">Tailwind CSS</span>
                        <span class="bg-indigo-100 text-indigo-800 text-sm font-semibold px-3 py-1.5 rounded-full">JavaScript</span>
                        <span class="bg-gray-100 text-gray-700 text-sm font-medium px-3 py-1.5 rounded-full">PHP</span>
                        <span class="bg-gray-100 text-gray-700 text-sm font-medium px-3 py-1.5 rounded-full">MySQL</span>
                        <span class="bg-gray-100 text-gray-700 text-sm font-medium px-3 py-1.5 rounded-full">Problem Solving</span>
                    </div>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-gray-900 border-b-2 border-indigo-200 pb-2">Pendidikan</h2>
                    <div class="mt-4 space-y-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">D3 - Application Software Engineering</h3>
                            <p class="text-md text-gray-700 italic">Politeknik LP3I Karawang</p>
                            <p class="text-sm text-gray-500 font-medium">2023 - Sekarang</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">SMK - Teknik Komputer & Jaringan</h3>
                            <p class="text-md text-gray-700 italic">SMKN Pertanian Karawang</p>
                            <p class="text-sm text-gray-500 font-medium">2019 - 2022</p>
                        </div>
                    </div>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-gray-900 border-b-2 border-indigo-200 pb-2">Bahasa</h2>
                    <div class="mt-4 space-y-2">
                        <p class="text-gray-700"><span class="font-semibold">Bahasa Indonesia:</span> Native</p>
                        <p class="text-gray-700"><span class="font-semibold">Bahasa Inggris:</span> Intermediate (cukup buat coding, dokumentasi & komunikasi)</p>
                    </div>
                </section>
            </div>
        </main>
    </div>

</body>
</x-app-layout>
