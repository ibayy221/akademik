<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::create(['namaKelas' => 'ASE-10','kapasitas' => 30]);
        Kelas::create(['namaKelas' => 'ASE-11','kapasitas' => 30]);
        Kelas::create(['namaKelas' => 'ASE-12','kapasitas' => 30]);
    }
}
