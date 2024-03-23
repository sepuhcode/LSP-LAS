<?php

namespace App\Http\Controllers;

use App\Models\PosisiLas;
use App\Models\SkemaSertifikasi;
use Illuminate\Http\Request;

class PosisiLasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $positions = PosisiLas::all();
        return view('admin.posisi-Las.index',[
            'posisis'=>$positions,
            'page'=>'Posisi Las']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skemaSertifikasi = SkemaSertifikasi::all();
        if ($skemaSertifikasi->isNotEmpty()) {
            return view('admin.posisi-Las.create',[
                'skemas'=>$skemaSertifikasi,
                'page'=>'Posisi Las'
            ]);
        } else {
            return back()->with('failed','Belum ada data Skema Sertifikasi');
        }


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'skema_sertifikasi_id' => 'required|integer'
        ]);

        PosisiLas::create($validatedData);
        return redirect('/admin/posisi-las')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(PosisiLas $posisiLas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PosisiLas $posisiLa)
    {
        $skemaSertifikasi = SkemaSertifikasi::all();
        return view('admin.posisi-las.update',[
            'skemas'=>$skemaSertifikasi,
            'posisiLas'=>$posisiLa,
            'page'=>'Posisi Las']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PosisiLas $posisiLa)
    {
        $updatedData = $request->validate([
            'name'=>'required|string',
            'skema_sertifikasi_id'=>'required|integer'
        ]);

        PosisiLas::whereId($posisiLa->id)->update($updatedData);
        return redirect('/admin/posisi-las')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PosisiLas $posisiLas)
    {
        dd('posisi las destroy');
    }
}
