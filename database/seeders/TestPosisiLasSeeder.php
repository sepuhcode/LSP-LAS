<?php

namespace Database\Seeders;

use App\Models\PosisiLas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestPosisiLasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PosisiLas::create([
            'name'=>'1G GMAW',
            'skema_sertifikasi_id'=>'1'
        ]);
        PosisiLas::create([
            'name'=>'3G FCAW-GMAW',
            'skema_sertifikasi_id'=>'2'
        ]);
        PosisiLas::create([
            'name'=>'3G FCAW',
            'skema_sertifikasi_id'=>'2'
        ]);
        PosisiLas::create([
            'name'=>'4G FCAW',
            'skema_sertifikasi_id'=>'2'
        ]);
        PosisiLas::create([
            'name'=>'6G GTAW-SMAW',
            'skema_sertifikasi_id'=>'1'
        ]);
        PosisiLas::create([
            'name'=>'3G GTAW',
            'skema_sertifikasi_id'=>'2'
        ]);
        PosisiLas::create([
            'name'=>'3G SMAW',
            'skema_sertifikasi_id'=>'2'
        ]);
        PosisiLas::create([
            'name'=>'2F SMAW',
            'skema_sertifikasi_id'=>'3'
        ]);
        PosisiLas::create([
            'name'=>'1F SMAW',
            'skema_sertifikasi_id'=>'3'
        ]);
        PosisiLas::create([
            'name'=>'6G SMAW',
            'skema_sertifikasi_id'=>'1'
        ]);
        // PosisiLas::create([
        //     'name'=>'3G FCAW',
        //     'skema_sertifikasi_id'=>'2'
        // ]);
        PosisiLas::create([
            'name'=>'2G SMAW',
            'skema_sertifikasi_id'=>'2'
        ]);
    }
}
