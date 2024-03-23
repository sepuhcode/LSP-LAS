<?php

namespace App\Http\Controllers;

use App\Imports\ImportSertifikat;
use App\Models\Sertifikasi;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SertifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Sertifikasi $sertifikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sertifikasi $sertifikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sertifikasi $sertifikasi)
    {
        //
    }

    public function showImport()
    {
        return view('admin.sertifikat.import',[
            'page'=>'Sertifikat'
        ]);
    }

    public function saveImport(Request $request)
    {
        Excel::import(new ImportSertifikat,$request->file('excelFile'));

        return redirect()->back();
    }
}
