<?php

namespace App\Http\Controllers;

use App\Models\KritikSaran;
use Illuminate\Http\Request;

class KritikSaranController extends Controller
{

      
    public function index()
    {

        $data['datakritiksaran'] = KritikSaran::all();
        return view('kritiksaran',$data);
    }

    public function tambahKritikSaran(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'kritiksaran' => 'required',
        ]);
 
            // Mengambil data yang dikirimkan melalui formulir
            $nama = $request->input('nama');
            $email = $request->input('email');
            $kritiksaran = $request->input('kritiksaran');

        KritikSaran::create([
            'nama'=> $nama,
            'email'=> $email,
            'kritiksaran'=> $kritiksaran,
            'balasan'=>'',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
        ]);

        return redirect()->back()->with('success', ['title' => 'Berhasil Menambahkan', 'message' => 'terima kasih atas masukan nya.Mohon Menunggu Konfirmasi']);

    }

    
    public function updateKritikSaran(Request $request, $id)
    {
        
        $produk = KritikSaran::find($id);

        $produk->balasan             = $request->balasan;
        $produk->updated_at       = date('Y-m-d H:i:s');
        $produk->save();

        return redirect()->back()->with('success', ['title' => 'Berhasil', 'message' => 'kritik / saran berhasil ditampilkan']);
    }
}
