<?php

namespace App\Http\Controllers;

use App\Models\dataLama;
use Illuminate\Http\Request;

class testSearchController extends Controller
{
   public function search(string $keyword){
    return dd(dataLama::where('no_sertifikat',$keyword)->firstOrFail());
   }
}
