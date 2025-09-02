<?php

namespace App\Http\Controllers;

use App\Models\Surveillance;
use Illuminate\Http\Request;

class SurveillanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.surveillance.index', [
            'data' => Surveillance::all(),
            'page' => 'Data Surveillance'
        ]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Surveillance $surveillance)
    {
        Surveillance::destroy($surveillance->id);
        return redirect('/admin/surveillance')->with('success', 'Deleted');
    }
}
