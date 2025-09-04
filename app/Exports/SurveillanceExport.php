<?php

namespace App\Exports;

use App\Models\Surveillance;
use Maatwebsite\Excel\Concerns\FromCollection;

class SurveillanceExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Surveillance::all();
    }
}
