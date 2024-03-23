<?php

namespace App\Http\Controllers;

use App\Models\SkemaSertifikasi;
use Illuminate\Http\Request;

class SkemaSertifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skemas = SkemaSertifikasi::all();
        return view('admin.skema-sertifikasi.index',
        ['skemas'=>$skemas,
         'page'=>'Skema Sertifikasi']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skema-sertifikasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'no_skema' => 'required|string',
            'deskripsi'=> 'required'
        ]);

        SkemaSertifikasi::create($validatedData);
        return redirect('/admin/skema-sertifikasi')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(SkemaSertifikasi $skemaSertifikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SkemaSertifikasi $skemaSertifikasi)
    {
        return view('admin.skema-sertifikasi.update',[
            'skema'=>$skemaSertifikasi,
            'page'=>'Skema Sertifikasi']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SkemaSertifikasi $skemaSertifikasi)
    {
        $updatedData = $request->validate([
            'name'=>'required',
            'no_skema'=>'required|string',
            'deskripsi'=>'required']);
        // $rules = [
        //     'name'=>'required|string',
        //     'no_skema'=>'required|string',

        // ];

        SkemaSertifikasi::whereId($skemaSertifikasi->id)->update($updatedData);
        return redirect('/admin/skema-sertifikasi')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SkemaSertifikasi $skemaSertifikasi)
    {
        $skemaSertifikasi->delete();
        return redirect('/admin/skema-sertifikasi')->with('success','Data berhasil dihapus');
    }
}
