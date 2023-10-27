<?php

namespace App\Http\Controllers;

use App\Models\Tuk;
use Illuminate\Http\Request;

class TukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("BuatTest.Admin.Tuk.index", [
            'tuks' => Tuk::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("BuatTest.Admin.Tuk.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'name' => 'required|string',
            'address' => 'required',
        ]);

        $fileName = 'tuk' . time() . '.' . $request->image->extension();
        $validatedData['image'] = $fileName;

        Tuk::create($validatedData);
        $request->image->move(public_path('Images/tukImg'),$fileName);

        return redirect('/admin/carousel')->with('success','image uploaded');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tuk $tuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tuk $tuk)
    {
        return view('BuatTest.Admin.Tuk.update',[
            'tuk'=>$tuk
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tuk $tuk)
    {
        $rules = [
            'name' => 'required|string',
            'address' => 'required',
        ];
        $rules['image'] = $request->image == $tuk->image ? '' : 'required|image|mimes:png,jpg,jpeg|max:2048';

        $updatedData = $request->validate($rules);

        Tuk::whereId($tuk->id)->update($updatedData);
        return redirect('/admin/tuk')->with('success','Edit Data Berhasil!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tuk $tuk)
    {
        Tuk::destroy($tuk->id);
        if (file_exists(public_path('Images/tukImg/'.$tuk->image))) {
            unlink(public_path('Images/tukImg/'.$tuk->image));
        }
        return redirect('/admin/tuk')->with('success','Data Berhasil Dihapus');
    }
}
