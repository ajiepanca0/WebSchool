<?php

namespace App\Http\Controllers;

use App\Models\KritikSaran;
use App\Models\UlasanAlumni;

class ProfileController extends Controller
{
    public function index()
    {
        $data['dataulasanalumni'] = UlasanAlumni::where('status', 'terverifikasi')->get();
        $data['datakritiksaran'] = KritikSaran::whereNotNull('balasan')->where('balasan', '!=', '')->get();
        return view('profile',$data);
    }
}
