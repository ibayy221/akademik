<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classes::create(['nama_kelas' => 'ASE-1A']);
        Classes::create(['nama_kelas' => 'TI-1B']);
        Classes::create(['nama_kelas' => 'TI-1C']);
    }
}
