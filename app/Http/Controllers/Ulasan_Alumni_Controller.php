<?php

namespace App\Http\Controllers;

use App\Models\UlasanAlumni;
use Illuminate\Http\Request;

class Ulasan_Alumni_Controller extends Controller
{
 

    
    public function index()
    {

        $data['dataulasanAlumni'] = UlasanAlumni::all();
        return view('ulasanalumni',$data);
    }



    public function tambahUlasan(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'ulasan' => 'required',
            'pekerjaan' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
 
            // Mengambil data yang dikirimkan melalui formulir
            $nama = $request->input('nama');
            $email = $request->input('email');
            $ulasan = $request->input('ulasan');
            $pekerjaan = $request->input('pekerjaan'); 
            $foto = $request->file('foto'); 
            $status = 'menunggu-verifikasi';
    
            $path = $foto->store('public/images/alumni');
            $gambar = basename($path);
    
        
        UlasanAlumni::create([
            'nama'=> $nama,
            'email'=> $email,
            'ulasan'=> $ulasan,
            'pekerjaan'=> $pekerjaan,
            'foto'=> $gambar,
            'status'=> $status,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
        ]);

        return redirect()->back()->with('success', ['title' => 'Berhasil Menambahkan', 'message' => 'Terima kasih. Mohon Menunggu Konfirmasi']);

    }

    public function ubahStatus($id)
    {
        // Temukan item berdasarkan ID
        $item = UlasanAlumni::find($id);

        if (!$item) {
            // Jika item tidak ditemukan, tampilkan pesan error atau redirect ke halaman yang sesuai
            return redirect()->back()->with('error', 'Item tidak ditemukan.');
        }

        // Ubah status item
        $item->status = 'terverifikasi';
        $item->save();

        // Redirect ke halaman yang sesuai atau tampilkan pesan berhasil
        return redirect()->back()->with('success', ['title' => 'Berhasil', 'message' => 'ulasan alumni berhasil ditampilkan']);
    }
}
