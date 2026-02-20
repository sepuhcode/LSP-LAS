<?php

namespace Database\Seeders;

use App\Models\Sertifikasi;
use Illuminate\Database\Seeder;

class SertifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sertifikasi::factory()->count(12000)->create();
    }
}
