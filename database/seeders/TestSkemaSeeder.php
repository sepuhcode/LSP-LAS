<?php

namespace Database\Seeders;

use App\Models\SkemaSertifikasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSkemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SkemaSertifikasi::create([
            'name'=>'Pipe Welder',
            'no_skema'=>'SS.03/PLW-III/LSP-LAS/2019',
            'deskripsi'=>'Just A Test'
        ]);
        SkemaSertifikasi::create([
            'name'=>'Plate Welder',
            'no_skema'=>'SS.02/PLW-II/LSP-LAS/2019',
            'deskripsi'=>'Just A Test'
        ]);
        SkemaSertifikasi::create([
            'name'=>'Fillet Welder',
            'no_skema'=>'SS.01/FW-II/LSP-LAS/2019',
            'deskripsi'=>'Just A Test'
        ]);
    }
}
