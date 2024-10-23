<?php

namespace App\Http\Controllers;

use App\Imports\ImportSertifikat;
use App\Models\PosisiLas;
use App\Models\Sertifikasi;
use App\Models\SkemaSertifikasi;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SertifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $sertifikats = Sertifikasi::with(['skemaSertifikasi:id,name', 'posisiLas:id,name', 'asesor:id,name','asesor2:id,name'])->get();
        return view('admin.sertifikat.index', [
            'sertifikats' => $sertifikats,
            'page' => 'Sertifikat'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skemas = SkemaSertifikasi::all();
        $asesors = User::role('asesor')->get();
        $owners = User::role(['user', 'tuk'])->get();
        return view('admin.sertifikat.create', [
            'skemas' => $skemas,
            'asesors' => $asesors,
            'owners' => $owners,
            'page' => 'Sertifikat'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'string|required',
            'no_sertifikat' => 'string|required|unique:sertifikasis',
            'no_reg_sertifikat' => 'string|required',
            'skema_sertifikasi_id' => 'required|integer',
            'posisi_las_id' => 'required|integer',
            'tuk' => 'string|required',
            'no_blangko' => 'string',
            'tgl_uji' => 'string',
            'tgl_sertifikat' => 'date|required',
            'asesor_id' => 'required|integer',
            'asesor2_id' => 'integer|nullable',
            'owner_id' => 'integer|nullable',
            'file_scan_sertifikat' => 'required|file|mimes:pdf|max:512'
        ]);

        $fileName = 'sertifikat-' . $request->no_sertifikat . '-' . time() . '.' . $request->file_scan_sertifikat->extension();
        $validatedData['file_scan_sertifikat'] = $fileName;

        Sertifikasi::create($validatedData);
        $request->file_scan_sertifikat->move(public_path('scan-files'), $fileName);

        return redirect('/admin/sertifikat')->with('success', 'Sertifikat Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sertifikasi $sertifikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sertifikasi $sertifikat)
    {
        $skemas = SkemaSertifikasi::all();
        $posisis = PosisiLas::where('skema_sertifikasi_id', $sertifikat->skema_sertifikasi_id)->get();
        $asesors = User::role('asesor')->get();
        $owners = User::role(['user', 'tuk'])->get();
        return view('admin.sertifikat.update', [
            'sertifikat' => $sertifikat,
            'skemas' => $skemas,
            'posisis' => $posisis,
            'asesors' => $asesors,
            'owners' => $owners,
            'page' => 'Sertifikat'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sertifikasi $sertifikat)
    {
        $rules = [];

        $request->name != $sertifikat->name ? $rules['name'] = 'string|required' : '';
        $request->no_sertifikat != $sertifikat->no_sertifikat ? $rules['no_sertifikat'] = 'string|required|unique:sertifikasis' : '';
        $request->no_reg_sertifikat != $sertifikat->no_reg_sertifikat ? $rules['no_reg_sertifikat'] = 'string|required' : '';
        $request->skema_sertifikasi_id != $sertifikat->skema_sertifikasi_id ? $rules['skema_sertifikasi_id'] = 'integer|required' : '';
        $request->posisi_las_id != $sertifikat->posisi_las_id ? $rules['posisi_las_id'] = 'integer|required' : '';
        $request->tuk != $sertifikat->tuk ? $rules['tuk'] = 'string|required' : '';
        $request->no_blangko != $sertifikat->no_blangko ? $rules['no_blangko'] = 'string' : '';
        $request->tgl_uji != $sertifikat->tgl_uji ? $rules['tgl_uji'] = 'string' : '';
        $request->tgl_sertifikat != $sertifikat->tgl_sertifikat ? $rules['tgl_sertifikat'] = 'date|required' : '';
        $request->asesor_id != $sertifikat->asesor_id ? $rules['asesor_id'] = 'integer|required' : '';
        $request->asesor2_id != $sertifikat->asesor2_id ? $rules['asesor2_id'] = 'integer|nullable' : '';
        $request->owner_id != $sertifikat->owner_id ? $rules['owner_id'] = 'integer|nullable' : '';

        if ($request->hasFile('file_scan_sertifikat')) {
            $rules['file_scan_sertifikat'] = 'required|file|mimes:pdf|max:512';
        }

        $updatedData = $request->validate($rules);

        if ($request->hasFile('file_scan_sertifikat')) {
            if (is_file(public_path('scan-files/' . $sertifikat->file_scan_sertifikat))) {
                unlink(public_path('scan-files/' . $sertifikat->file_scan_sertifikat));
            }
            $newFileName = 'sertifikat-' . $request->no_sertifikat . '-' . time() . '.' . $request->file_scan_sertifikat->extension();
            $updatedData['file_scan_sertifikat'] = $newFileName;
            $request->file_scan_sertifikat->move(public_path('scan-files'), $newFileName);
        }

        Sertifikasi::whereId($sertifikat->id)->update($updatedData);

        return redirect('admin/sertifikat')->with('success', 'Sertifikat Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sertifikasi $sertifikat)
    {
        Sertifikasi::destroy($sertifikat->id);
        if (file_exists(public_path('scan-files/' . $sertifikat->file_scan_sertifikat))) {
            unlink(public_path('scan-files/' . $sertifikat->file_scan_sertifikat));
        }
        return redirect('/admin/sertifikat')->with('success', 'Data Berhasil Dihapus');
    }

    public function showImport()
    {
        return view('admin.sertifikat.import', [
            'page' => 'Sertifikat'
        ]);
    }

    public function saveImport(Request $request)
    {
        Excel::import(new ImportSertifikat, $request->file('excelFile'));

        return redirect('/admin/sertifikat')->with('success', 'Import Data Berhasil');
    }

    public function fetchPosisiLas(Request $request)
    {
        $data['posisiLas'] = SkemaSertifikasi::find($request->skema_id)->posisis;
        return response()->json($data);
    }

    public function viewFile(Request $request)
    {
        $filePath = public_path('scan-files/' . $request->file);
        return response()->file($filePath);
    }
}
