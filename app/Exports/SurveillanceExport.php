<?php

namespace App\Exports;

use App\Models\Surveillance;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SurveillanceExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Surveillance::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama Lengkap',
            'Email',
            'No Handphone',
            'No Identitas',
            'no Sertifikat',
            'No Registrasi Sertifikat',
            'Skema Kompetensi ID',
            'Sumber Dana Sertifikasi ID',
            'Nama Tempat Bekerja',
            'Alamat Tempat Bekerja',
            'Jabatan Ditempat Kerja',
            'Proyek Sedang Dikerjakan',
            'Jabatan Dalam Proyek',
            'Pekerjaan Sesuai SKK',
            'Pekerjaan Sesuai SKK Text',
            'Dibuat Pertanggal',
            'Diperbarui Pertanggal',
        ];
    }
}
