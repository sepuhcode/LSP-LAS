<?php

namespace App\Http\Controllers;

use App\Models\PosisiLas;
use Illuminate\Http\Request;

class PosisiLasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $positions = PosisiLas::all();
        return view('buat-test.admin.posisi-las.index', ['positions' => $positions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buat-test.admin.posisi-las.create');
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
        return redirect('/admin/posisi-las')->with('success', 'Data berhasil ditambahkan');
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
    public function edit(PosisiLas $posisiLas)
    {
        return view('buat-test.admin.posisi-las.update', ['posisiLas' => $posisiLas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PosisiLas $posisiLas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PosisiLas $posisiLas)
    {
        //
    }
}
