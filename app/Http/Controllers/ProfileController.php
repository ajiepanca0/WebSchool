<?php

namespace App\Http\Controllers;

use App\Models\UlasanAlumni;

class ProfileController extends Controller
{
    public function index()
    {
        $data['dataulasanalumni'] = UlasanAlumni::where('status', 'terverifikasi')->get();
        return view('profile',$data);

    }
}
