<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Sertifikasi;
use App\Models\Tuk;

class DashboardController extends Controller
{
    public function index()
    {
        $accountRegistrations = Registration::whereAccepted(null)->count();
        $tuks = Tuk::count();
        $certificates = Sertifikasi::count();

        return view('admin.dashboard.index', [
            'accountRegistrations' => $accountRegistrations,
            'tuks' => $tuks,
            'certificates' => $certificates,
        ]);
    }
}
