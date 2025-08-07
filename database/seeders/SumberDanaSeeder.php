<?php

namespace Database\Seeders;

use App\Models\SumberDanaSertifikasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SumberDanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'Sumber anggaran dari APBN'
            ],
            [
                'name' => 'Sumber anggaran dari APBD'
            ],
            [
                'name' => 'Sumber anggaran biaya dari perusahaan'
            ],
            [
                'name' => 'Sumber anggaran biaya mandiri'
            ]
        ];

        SumberDanaSertifikasi::insert($datas);
    }
}
