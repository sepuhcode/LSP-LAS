<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Sertifikasi;
use App\Models\Tuk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $accountRegistrations = Registration::whereAccepted(0)->count();
        $tuks = Tuk::count();
        $certificates = Sertifikasi::count();
        return view('Admin.Dashboard.index',[
            'accountRegistrations'=>$accountRegistrations,
            'tuks'=>$tuks,
            'certificates'=>$certificates,
        ]);
    }
}
