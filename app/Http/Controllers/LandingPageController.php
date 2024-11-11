<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\FotoKaryawan;
use App\Models\OldData;
use App\Models\Sertifikasi;
use App\Models\SkemaSertifikasi;
use App\Models\Tuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function search(string $keyword)
    {
        $sertifikat = OldData::select('nama', 'no_sertifikat', 'asesor', 'skema_sertifikasi', 'tgl_sertifikat')->where('no_sertifikat', $keyword)->get();
        if ($sertifikat->isNotEmpty()) {
            $tglBerlaku = date_add(date_create($sertifikat[0]->tgl_sertifikat_baru), date_interval_create_from_date_string("1095 days"));
        } else {
            $tglBerlaku = "";
        }
        return view('home', compact('sertifikat', 'tglBerlaku'));
        //  return dd(OldData::where('no_sertifikat',$keyword)->firstOrFail());
    }

    public function convertDate()
    {
        $datas = OldData::all();
        // $datas = OldData::pluck('tgl_sertifikat_lama','no');
        foreach ($datas as $data) {
            if (!empty($data->tgl_sertifikat_lama)) {
                $correct_tgl = str_replace('/', '-', $data->tgl_sertifikat_lama); //replace / ke - (ex: "02/08/2023" -> "02-08-2023");
                $time = strtotime($correct_tgl);
                $formatedDate = date('Y-m-d', $time);
            } else {
                $formatedDate = null;
            }

            DB::table('old_data')->where('no', $data->no)->update(['tgl_sertifikat_baru' => $formatedDate]);
        }
    }

    public function checkDate()
    {
        $data = OldData::select('tgl_sertifikat_baru')->where('no', 2)->get();
        $tgl_berlaku = date_add(date_create($data[0]->tgl_sertifikat_baru), date_interval_create_from_date_string("1095 days"));
        // dd(date_format($tgl_berlaku,'d-M-Y'));

        $test = [
            'type' => 'test',
            'tanggal sertifikat' => date_format(date_create($data[0]->tgl_sertifikat_baru), 'd-M-Y'),
            'berlaku s/d' => date_format($tgl_berlaku, 'd-M-Y')
        ];
    }

    public function findSertifikat(Request $request)
    {
        $data = $request;
        return response()->json($data, 200);
    }

    public function cariSertifikat(Request $request)
    {
        $skemaSertifikasis = SkemaSertifikasi::all();
        $keyword = $request['keyword'];

        $sertifikat = OldData::select('nama', 'no_sertifikat', 'asesor', 'skema_sertifikasi', 'posisi_las', 'tgl_sertifikat')->where('no_sertifikat', $keyword)->get();
        if ($sertifikat->isNotEmpty()) {
            if ($sertifikat[0]->tgl_sertifikat != null) {
                $tglBerlaku = date_add(date_create($sertifikat[0]->tgl_sertifikat), date_interval_create_from_date_string("1096 days"));
            } else {
                $tglBerlaku = null;
            }
        } else {
            $sertifikat = [];
            $tglBerlaku = null;
            session(['failed' => 'Data tidak ditemukan']);
            // return view('sertifikat.index', compact('sertifikat', 'tglBerlaku'));
            return redirect()->route('sertifikat')->with($sertifikat)->with($tglBerlaku);
        }

        return view('sertifikat.index', [
            'sertifikat' => $sertifikat,
            'tglBerlaku' => $tglBerlaku,
            'skemaSertifikasis' => $skemaSertifikasis
        ]);
        // return redirect()->route('sertifikat')->with('sertifikat',$sertifikat)->with('tglBerlaku',$tglBerlaku);

    }

    public function cariSertifikatNew(Request $request)
    {
        // $skemaSertifikasis = SkemaSertifikasi::all();
        $keyword = $request['key_word'];

        // $sertifikat = Sertifikasi::select('nama', 'no_sertifikat', 'asesor', 'skema_sertifikasi', 'posisi_las', 'tgl_sertifikat')->where('no_sertifikat', $keyword)->get();
        $sertifikat = Sertifikasi::where('no_sertifikat', $keyword)->get();
        if ($sertifikat->isNotEmpty()) {
            if ($sertifikat[0]->tgl_sertifikat != null) {
                $compareDate = strtotime("01-01-1970"); //compare date  (tanggal sertifikat tidak bisa dikosongin/null karena type nya date jadi kalau kosong diakalin dengan diisi pakai tahun 01-01-1970)
                if (strtotime($sertifikat[0]->tgl_sertifikat) == $compareDate) { //cek apakah tanggal & tahun nya sama dengan compare date(10-10-1970), kalau sama maka akan diisi null
                    $tglBerlaku = null;
                } else {
                    $tglBerlaku = date_add(date_create($sertifikat[0]->tgl_sertifikat), date_interval_create_from_date_string("1096 days"))->format('d-m-Y');
                }
            } else {
                $tglBerlaku = null;
            }

            $asesor2 = null;
            if ($sertifikat[0]->asesor2 != null) {
                $asesor2 = $sertifikat[0]->asesor2->name;
            }

            $asesor = $sertifikat[0]->asesor->name;
            $skemaSertifikasi = $sertifikat[0]->skemaSertifikasi->name;
            $posisiLas = $sertifikat[0]->posisiLas->name;
        } else {
            $sertifikat = [];
            $tglBerlaku = null;
            $asesor = null;
            $asesor2 = null;
            $skemaSertifikasi = null;
            $posisiLas = null;
        }

        return response()->json(
            [
                'sertifikat' => $sertifikat,
                'asesor' => $asesor,
                'asesor2' => $asesor2,
                'skemaSertifikasi' => $skemaSertifikasi,
                'posisiLas' => $posisiLas,
                'tglBerlaku' => $tglBerlaku
            ]
        );
    }

    public function showSertifikatPage()
    {
        $sertifikat = [];
        $tglBerlaku = null;
        $skemaSertifikasis = SkemaSertifikasi::all();

        return view('sertifikat.index', [
            'sertifikat' => $sertifikat,
            'tglBerlaku' => $tglBerlaku,
            'skemaSertifikasis' => $skemaSertifikasis
        ]);
    }

    public function showHomePage()
    {
        $sertifikat = [];
        $tglBerlaku = null;
        $tuks = Tuk::all();
        $skema = SkemaSertifikasi::count();
        $carousels = Carousel::whereVisibility(true)->get();
        $karyawans = FotoKaryawan::all();

        return view('home', [
            'sertifikat' => $sertifikat,
            'tglBerlaku' => $tglBerlaku,
            'tuks' => $tuks,
            'skema' => $skema,
            'carousels' => $carousels,
            'karyawans' => $karyawans

        ]);
    }

    public function showPendaftaran()
    {
        return view('Pendaftaran.index');
    }

    public function showAbout()
    {

        $karyawans = FotoKaryawan::all();

        return view('About.index', [
            'karyawans' => $karyawans,
        ]);
    }
}
