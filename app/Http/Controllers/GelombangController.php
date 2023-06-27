<?php

namespace App\Http\Controllers;

use App\Models\Gelombang;
use Illuminate\Http\Request;

class GelombangController extends Controller
{
    public function index()
    {

        $data['datagelombang'] = Gelombang::all();
        return view('gelombang',$data);
    }



    public function tambahgelombang(Request $request)
    {

        $request->validate([
            'nama_gelombang' => 'required',
            'batas_gelombang' => 'required',
        ]);
 
            // Mengambil data yang dikirimkan melalui formulir
            $nama_gelombang = $request->input('nama_gelombang');
            $batas_gelombang = $request->input('batas_gelombang');

    
        
        Gelombang::create([
            'nama_gelombang'=> $nama_gelombang,
            'batas_gelombang'=> $batas_gelombang,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
        ]);

        return redirect()->back()->with('success', ['title' => 'Berhasil Menambahkan', 'message' => 'Batas gelombang berhasil ditambahkan']);

    }

    public function gelombangupdate(Request $request, $id)
    {
        
        $gelombang = Gelombang::find($id);

        $gelombang->nama_gelombang             = $request->nama_gelombang;
        $gelombang->batas_gelombang            = $request->batas_gelombang;
        $gelombang->updated_at                 = date('Y-m-d H:i:s');
        $gelombang->save();

        return redirect()->back()->with('success', ['title' => 'Berhasil Update', 'message' => 'Gelombang berhasil di update']);
    }

     
    public function gelombangdelete(Request $request, $id)
    {

        $promo = Gelombang::find($id);
        $promo->delete();

        return redirect()->back()->with('success', ['title' => 'Berhasil Hapus', 'message' => 'Gelombang berhasil di hapus']);
    }

    
}
