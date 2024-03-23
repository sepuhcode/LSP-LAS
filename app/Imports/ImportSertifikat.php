<?php

namespace App\Imports;

use App\Models\Sertifikasi;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class ImportSertifikat implements ToCollection, WithCalculatedFormulas
{

    public function collection(Collection $collection)
    {
        $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($collection[3][10])->format('Y-m-d h:i:s'); //convert excel date (int) ke date format
        // dd($date);
        $index = 0; //skip index 0 (header/judul)
        foreach ($collection as $row) {
            if ($index > 0) {
                // $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[10])->format('Y-m-d h:i:s');
                // $sertifikat['name'] = $row[2];
                // $sertifikat['no_sertifikat'] =  $row[3];
                // $sertifikat['no_reg_sertifikat'] =  $row[4];
                // $sertifikat['skema_sertifikasi_id'] =  $row[5];
                // $sertifikat['posisi_las_id'] =  $row[6];
                // $sertifikat['tuk'] =  $row[7];
                // $sertifikat['no_blangko'] =  $row[8];
                // $sertifikat['tgl_uji'] =  $row[9];
                // $sertifikat['tgl_sertifikat'] = $date;
                // $sertifikat['user_id'] = $row[11];

                if (!empty($row[10])) {
                    $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($collection[3][10])->format('Y-m-d h:i:s'); //convert excel date (int) ke date format

                }
                else{
                    $date = '1970-01-01';
                }

                if (!empty($row[2])) {
                
                $sertifikat['nama'] = !empty($row[2]) ? $row[2] : '';
                $sertifikat['no_sertifikat'] = !empty($row[3]) ? $row[3] : '';
                $sertifikat['no_reg_sertifikat'] = !empty($row[4]) ? $row[4] : '';
                $sertifikat['skema_sertifikasi_id'] = !empty($row[5]) ? $row[5] : '';
                $sertifikat['posisi_las_id'] = !empty($row[6]) ? $row[6] : '';
                $sertifikat['skema_sertifikasi_id'] = !empty($row[5]) ? $row[5] : '';
                $sertifikat['posisi_las_id'] = !empty($row[6]) ? $row[6] : '';
                $sertifikat['tuk'] = !empty($row[7]) ? $row[7] : '';
                $sertifikat['no_blangko'] = !empty($row[8]) ? $row[8] : '';
                $sertifikat['tgl_uji'] = !empty($row[9]) ? $row[9] : '';
                // $sertifikat['tgl_sertifikat'] = !empty($row[10]) ? $date : '';
                $sertifikat['tgl_sertifikat'] = $date;
                // $sertifikat['user_id'] = !empty($row[11]) ? $row[11] : '';
                $sertifikat['user_id'] = rand(1,100); //random number buat test

                // dd($sertifikat);
                Sertifikasi::create($sertifikat);

                }
            }
            $index++;
        }
    }
}
