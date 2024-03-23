<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;

use function PHPUnit\Framework\fileExists;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.carousel.index',[
            'carousels'=>Carousel::all(),
            'page' => 'Carousel'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.carousel.create',[
            'page' => 'Carousel'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:4096'
        ]);

        $fileName = time() . '.' . $request->image->extension();

        $validatedData = [
            'image' => $fileName,
            'visibility' => true
        ];

        Carousel::create($validatedData);


        $request->image->move(public_path('Images/carousel-img'), $fileName);

        return redirect('/admin/carousel')->with('success','Uploaded');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carousel $carousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carousel $carousel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carousel $carousel)
    {
        $updatedData = [
            'visibility' => !$carousel->visibility
        ];
        Carousel::whereId($carousel->id)->update($updatedData);
        return redirect('/admin/carousel')->with('success','Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carousel $carousel)
    {

        Carousel::destroy($carousel->id);
        if (file_exists(public_path('Images/carousel-img/' . $carousel->image))) {
            unlink(public_path('Images/carousel-img/' . $carousel->image));
        }
        return redirect('/admin/carousel')->with('success','Deleted');
    }
}
