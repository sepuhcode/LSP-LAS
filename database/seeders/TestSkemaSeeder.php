<?php

namespace Database\Seeders;

use App\Models\SkemaSertifikasi;
use Illuminate\Database\Seeder;

class TestSkemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SkemaSertifikasi::create([  // 1
            'name' => 'Fillet Welder',
            'no_skema' => 'SS.01/FW-II/LSP-LAS/2019',
            'deskripsi' => '',
        ]);
        SkemaSertifikasi::create([  // 2
            'name' => 'Plate Welder',
            'no_skema' => 'SS.02/PLW-II/LSP-LAS/2019',
            'deskripsi' => '',
        ]);
        SkemaSertifikasi::create([  // 3
            'name' => 'Pipe Welder',
            'no_skema' => 'SS.03/PPW-III/LSP-LAS/2019',
            'deskripsi' => '',
        ]);
        SkemaSertifikasi::create([  // 4
            'name' => 'Group Leader',
            'no_skema' => 'SS.04/GL-III/LSP-LAS/2019',
            'deskripsi' => '',
        ]);
        SkemaSertifikasi::create([  // 5
            'name' => 'Welding Inspector Basic',
            'no_skema' => 'SS.05/WIB-III/LSP-LAS/2019',
            'deskripsi' => '',
        ]);
        SkemaSertifikasi::create([  // 6
            'name' => 'Welding Foreman',
            'no_skema' => 'SS.06/WF-IV/LSP-LAS/2019',
            'deskripsi' => '',
        ]);
        SkemaSertifikasi::create([  // 7
            'name' => 'Welding Inspector Standard',
            'no_skema' => 'SS.07/WIS-IV/LSP-LAS/2019',
            'deskripsi' => '',
        ]);
        SkemaSertifikasi::create([  // 8
            'name' => 'Welding Practitioner',
            'no_skema' => 'SS.08/WP-IV/LSP-LAS/2019',
            'deskripsi' => '',
        ]);
        SkemaSertifikasi::create([  // 9
            'name' => 'Welding Instructor',
            'no_skema' => 'SS. 09/WI-IV/LSP-LAS/2019',
            'deskripsi' => '',
        ]);
        SkemaSertifikasi::create([  // 10
            'name' => 'Welding Specialist/Supervisor ',
            'no_skema' => 'SS.10/WSS-V/LSP-LAS/2019',
            'deskripsi' => '',
        ]);
        SkemaSertifikasi::create([  // 11
            'name' => 'Welding Inspector Comprehensive',
            'no_skema' => 'SS.11/WIC-V/LSP-LAS/2019',
            'deskripsi' => '',
        ]);
        SkemaSertifikasi::create([  // 12
            'name' => 'Welding Technologist/Superintendent',
            'no_skema' => 'SS.12/WTS-V/LSP-LAS/2019',
            'deskripsi' => '',
        ]);
        SkemaSertifikasi::create([  // 13
            'name' => 'Welding Engineer',
            'no_skema' => 'SS.13/WE-VI/LSP-LAS/2019',
            'deskripsi' => '',
        ]);
    }
}
