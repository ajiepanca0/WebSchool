<?php
  
namespace App\Http\Controllers;

use App\Models\KritikSaran;
use App\Models\Pendaftaran;
use App\Models\UlasanAlumni;
use Illuminate\Http\Request;
  
class HomeController extends Controller
{
    public function index()
    {

        $alumni = UlasanAlumni::count();
        $kodeterpakai = Pendaftaran::where('kode','!=',null)->count();
        $pendaftar = Pendaftaran::count();
        $kritik = KritikSaran::count();



        return view('dashboard', compact('alumni','kodeterpakai','pendaftar','kritik'));
    }
}