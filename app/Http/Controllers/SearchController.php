<?php

namespace App\Http\Controllers;

namespace App\Models\OldData;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testSearchController extends Controller
{
   public function search(string $keyword)
   {
      $sertifikat = OldData::select('nama', 'no_sertifikat', 'asesor', 'skema_sertifikasi', 'tgl_sertifikat_baru')->where('no_sertifikat', $keyword)->get();
      if ($sertifikat->isNotEmpty()) {
         $tglBerlaku = date_add(date_create($sertifikat[0]->tgl_sertifikat_baru), date_interval_create_from_date_string("1095 days"));
      } else {
         $tglBerlaku = "";
      }
      return view('testView', compact('sertifikat', 'tglBerlaku'));
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
      dd($test);
      // dd($tgl_berlaku);
   }

   public function cariSertifikat(Request $request)
   {
      $keyword = $request['keyword'];

      $sertifikat = OldData::select('nama', 'no_sertifikat', 'asesor', 'skema_sertifikasi', 'tgl_sertifikat_baru')->where('no_sertifikat', $keyword)->get();
      if ($sertifikat->isNotEmpty()) {
         if ($sertifikat[0]->tgl_sertifikat_baru != null) {
            $tglBerlaku = date_add(date_create($sertifikat[0]->tgl_sertifikat_baru), date_interval_create_from_date_string("1096 days"));
         }
         else{
            $tglBerlaku = null;
         }
      } else {
         $sertifikat = [];
         $tglBerlaku = null;
         session(['failed' => 'Data tidak ditemukan']);
         return view('testView', compact('sertifikat', 'tglBerlaku'));
      }
      // return view('testView', compact('sertifikat', 'tglBerlaku'));
      // return view('testView')->with('sertifikat',$sertifikat)->with('tglBerlaku',$tglBerlaku)->with('failed','Data tidak ditemukan');//cuma test
      return redirect('cari.sertifikat')->with('sertifikat',$sertifikat)->with('tglBerlaku',$tglBerlaku);

   }
   public function showHomePage()
   {
      // $sertifikat =[['nama'=>' ',
      // 'no-sertifikat'=>' ',
      // 'asesor'=>' ',
      // 'skema_sertifikasi'=>' ']];
      $sertifikat = [];
      $tglBerlaku = null;
      return view('testView', compact('sertifikat', 'tglBerlaku'));
   }
}
