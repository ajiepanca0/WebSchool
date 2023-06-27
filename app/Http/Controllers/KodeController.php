<?php

namespace App\Http\Controllers;

use App\Models\Kode;
use Illuminate\Http\Request;

class KodeController extends Controller
{
    public function index(){
        
        $data['datakode'] = Kode::all();
        return view('kode',$data);
    }

    public function tambahkode(Request $request)
    {

        $request->validate([
            'kode' => 'required',
            'nominal' => 'required',
        ]);
 
            // Mengambil data yang dikirimkan melalui formulir
            $kode = $request->input('kode');
            $nominal = $request->input('nominal');

    
        
        Kode::create([
            'kode'=> $kode,
            'nominal'=> $nominal,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
        ]);

        return redirect()->back()->with('success', ['title' => 'Berhasil Menambahkan', 'message' => 'Kode berhasil ditambahkan']);

    }


    public function kodeupdate(Request $request, $id)
    {
        
        $kode = Kode::find($id);

        $kode->kode             = $request->kode;
        $kode->nominal            = $request->nominal;
        $kode->updated_at                 = date('Y-m-d H:i:s');
        $kode->save();

        return redirect()->back()->with('success', ['title' => 'Berhasil Update', 'message' => 'Kode berhasil di update']);
    }

    public function kodedelete(Request $request, $id)
    {

        $kode = Kode::find($id);
        $kode->delete();

        return redirect()->back()->with('success', ['title' => 'Berhasil Hapus', 'message' => 'Kode berhasil di hapus']);
    }


}
