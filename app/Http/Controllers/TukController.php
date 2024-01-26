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
        // return view("BuatTest.Admin.Tuk.index", [
        //     'tuks' => Tuk::all()
        // ]);
        return view('Admin.TUK.index', [
            'tuks' => Tuk::all(),
            'page' => 'TUK'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.TUK.create',[
            'page' => 'TUK'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'name' => 'required|string|unique:tuks',
            'address' => 'required',
        ]);

        $fileName = 'tuk' . time() . '.' . $request->image->extension();
        $validatedData['image'] = $fileName;

        Tuk::create($validatedData);
        $request->image->move(public_path('Images/tukImg'),$fileName);

        return redirect('/admin/tuk')->with('success','Uploaded');
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
        return view('Admin.TUK.update',[
            'tuk'=>$tuk,
            'page' => 'TUK'
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tuk $tuk)
    {
        $rules = [
            'address' => 'required',
        ];
        $request->name != $tuk->name ? $rules['name']= 'required|unique:tuks': '';

        // $rules['image'] = $request->image == $tuk->image ? '' : 'required|image|mimes:png,jpg,jpeg|max:2048';
        // dd($request->hasFile('image'));
        // $rules['image'] = $request->hasFile('image') ? 'required|image|mimes:png,jpg,jpeg|max:2048' : '';
        if ($request->hasFile('image')) {
            $rules['image'] = 'required|image|mimes:png,jpg,jpeg|max:2048';
        }

        $updatedData = $request->validate($rules);

        if ($request->hasFile('image')) {
            if (file_exists(public_path('Images/tukImg/'.$tuk->image))) {
                unlink(public_path('Images/tukImg/'.$tuk->image));
            }

            $newFileName = 'tuk' . time() . '.' . $request->image->extension();
            $updatedData['image'] = $newFileName;
            $request->image->move(public_path('Images/tukImg'),$newFileName);

        }
        Tuk::whereId($tuk->id)->update($updatedData);
        return redirect('/admin/tuk')->with('success','Updated');

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
        return redirect('/admin/tuk')->with('success','Deleted');
    }
}
