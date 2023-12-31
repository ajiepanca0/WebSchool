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
            'nominal1' => 'required',
            'nominal2' => 'required',

        ]);
 
            // Mengambil data yang dikirimkan melalui formulir
            $nama_gelombang = $request->input('nama_gelombang');
            $batas_gelombang = $request->input('batas_gelombang');
            $nominal1 = $request->input('nominal1');
            $nominal2 = $request->input('nominal2');

    
        
        Gelombang::create([
            'nama_gelombang'=> $nama_gelombang,
            'batas_gelombang'=> $batas_gelombang,
            'nominal1' => $nominal1,
            'nominal2' => $nominal2,
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
        $gelombang->nominal1                   = $request->nominal1;
        $gelombang->nominal2                   = $request->nominal2;

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
