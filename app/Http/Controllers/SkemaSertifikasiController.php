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
        return view('buat-test.admin.skema-sertifikasi.index', ['skemas' => $skemas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buat-test.admin.skema-sertifikasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
        ]);

        SkemaSertifikasi::create($validatedData);
        return redirect('/admin/skema-sertifikasi')->with('success', 'data berhasil ditambahkan');
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
        return view('buat-test.admin.skema-sertifikasi.update', ['skema' => $skemaSertifikasi]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SkemaSertifikasi $skemaSertifikasi)
    {
        $updatedData = $request->validate(['name' => 'required']);

        SkemaSertifikasi::whereId($skemaSertifikasi->id)->update($updatedData);
        return redirect('/admin/skema-sertifikasi')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SkemaSertifikasi $skemaSertifikasi)
    {
        dd('skema sertifikasi destroy');
    }
}
