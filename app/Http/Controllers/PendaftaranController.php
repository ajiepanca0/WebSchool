<?php

namespace App\Http\Controllers;

use App\Models\Gelombang;
use App\Models\Kode;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use TCPDF;


class PendaftaranController extends Controller
{
    public function index()
    {
        $datenow = date('Y-m-d H:i:s');
        $data['datagelombang'] = Gelombang::whereDate('batas_gelombang', '>=',$datenow )->first();

        return view('pendaftaran',$data);
    }

    public function show()
    {
        $data['datapendaftaran'] = Pendaftaran::get();
        return view('listpendaftar',$data);
    }

    public function detailpendaftar($id)
    {
        
        // $data = Pendaftaran::find($id);
        $dataPendaftaran = Pendaftaran::find($id);
        $datagelombang = Gelombang::whereDate('batas_gelombang', '>',$dataPendaftaran->created_at )->first();

        return view('detailpendaftar', compact('dataPendaftaran','datagelombang'));
    }

    public function verifikasidata($id)
    {
        // Temukan item berdasarkan ID
        $item = Pendaftaran::find($id);

        if (!$item) {
            // Jika item tidak ditemukan, tampilkan pesan error atau redirect ke halaman yang sesuai
            return redirect()->back()->with('error', 'Item tidak ditemukan.');
        }

        // Ubah status item
        $item->status = 'terverifikasi';
        $item->save();

        // Redirect ke halaman yang sesuai atau tampilkan pesan berhasil
        return redirect('/listpendaftaran')->with('success', ['title' => 'Berhasil Verifikasi', 'message' => 'Calon Siswa Berhasil Diverifikasi ']);
    }



    public function sendPendaftaran(Request $request)
    {

        
        $datenow = date('Y-m-d H:i:s');
        $datagelombang =  Gelombang::whereDate('batas_gelombang', '>=',$datenow )->first();


        $kodevoucher = $request->kode;
        $dataKode = Kode::where('kode', $kodevoucher)->first();


        if ($kodevoucher) {
            $datagelombang = Gelombang::where('id',$datagelombang->id)->first(); // Ganti dengan model yang sesuai
            $insider = $datagelombang->nominal1 - $dataKode->nominal;
            $outsider = $datagelombang->nominal2 - $dataKode->nominal;

        }else{

            $insider = $datagelombang->nominal1;
            $outsider = $datagelombang->nominal2;

        }

        $tanggalSekarang = date('Ymd');
        $barisTerakhir = Pendaftaran::latest()->first();

        if ($barisTerakhir) {
                    $kodePendaftaran = $tanggalSekarang . $barisTerakhir->id;
        }else{
            $kodePendaftaran = $tanggalSekarang . 1;
        }

        // dd($kodePendaftaran);

        // dd($request->pendidikan_ayah,$request->pekerjaan_ayah,$request->penghasilan_ayah,
        // $request->pendidikan_ibu,$request->pekerjaan_ibu,$request->penghasilan_ibu,
        // $request->pendidikan_wali,$request->pekerjaan_wali,$request->penghasilan_wali);



        $validatedData = $request->validate([
            'nama' => 'required|max:100',
            'nisn' => 'required|max:100',
            'no_kk' => 'required|max:100',
            'no_nik' => 'required|max:100',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required|max:10',
            'golongan_darah' => 'required|max:5',
            'anak_ke' => 'required|integer',
            'anak_ke_dari' => 'required|integer',
            'saudara_tiri' => 'required|integer',
            'saudara_kandung' => 'required|integer',
            'status_dalam_keluarga' => 'required|max:50',
            'tinggal_dengan' => 'required|max:50',
            'alamat_lengkap' => 'required|max:100',
            'handphone' => 'required|max:20',
            'koordinat_rumah' => 'required|max:50',
            'jaraktempuh' => 'required|max:50',
            'waktutempuh' => 'required|max:50',
            'transportasi' => 'required|max:50',
            'hobi' => 'required|max:100',
            'citacita' => 'required|max:100',
            'imunisasi' => 'required|max:50',
            'nama_ayah_kandung' => 'required|max:100',
            'tempat_lahir_ayah' => 'required|max:100',
            'tgl_lahir_ayah' => 'required|date',
            'no_nik_ayah' => 'required|max:50',
            'nama_ibu_ayah' => 'required|max:100',
            'status_ayah' => 'required|max:50',
            'pendidikan_ayah' => 'required|max:50',
            'pekerjaan_ayah' => 'required|max:50',
            'penghasilan_ayah' => 'required|max:50',
            'domisili_tempat_ayah' => 'required|max:100',
            'status_tempat_ayah' => 'required|max:50',
            'alamat_rumah_ayah' => 'required|max:100',
            'no_hp_ayah' => 'required|max:20',
            'nama_ibu_kandung' => 'required|max:100',
            'tempat_lahir_ibu' => 'required|max:100',
            'tgl_lahir_ibu' => 'required|date',
            'no_nik_ibu' => 'required|max:50',
            'nama_ibu_ibu' => 'required|max:100',
            'status_ibu' => 'required|max:50',
            'pendidikan_ibu' => 'required|max:50',
            'pekerjaan_ibu' => 'required|max:50',
            'penghasilan_ibu' => 'required|max:50',
            'domisili_tempat_ibu' => 'required|max:100',
            'status_tempat_ibu' => 'required|max:50',
            'alamat_rumah_ibu' => 'required|max:100',
            'no_hp_ibu' => 'required|max:20',
            'bantuan_pemerintah' => 'required|max:50',
            'no_kip' => 'required|max:50',
            'no_kk_kip' => 'required|max:50',
            'nama_kepala_kip' => 'required|max:100',
            'nama_wali_kandung' => 'required|max:100',
            'tempat_lahir_wali' => 'required|max:100',
            'tgl_lahir_wali' => 'required|date',
            'no_nik_wali' => 'required|max:50',
            'nama_ibu_wali' => 'required|max:100',
            'status_wali' => 'required|max:50',
            'pendidikan_wali' => 'required|max:50',
            'pekerjaan_wali' => 'required|max:50',
            'penghasilan_wali' => 'required|max:50',
            'domisili_tempat_wali' => 'required|max:100',
            'status_tempat_wali' => 'required|max:50',
            'alamat_rumah_wali' => 'required|max:100',
            'no_hp_wali' => 'required|max:20',
            'asal_sekolah' => 'required|max:100',
            'nama_asal_sekolah' => 'required|max:100',
            'alamat_sekolah_asal' => 'required|max:100',
            'ijazah_yang_diterima' => 'required|max:50',
            'tahun_lulus_ijazah' => 'required|date',
            'no_ijazah' => 'required|max:50',
            'sertifikat_ujian' => 'required|max:50',
            'tahun_lulus_ujian' => 'required|date',
            'no_sertifikatujian_shun' => 'required|max:50',
            'no_peserta_un' => 'required|max:50',
            'nilai_ratarata_ijazah' => 'required|integer',
            'nilai_ratarata_um' => 'required|integer',
            'no_induk_sekolah_asal' => 'required|max:50',
            'no_statistik_madrasah' => 'required|max:50',
            'npsn_sekolah_asal' => 'required|max:50',
            'nama_pembiayai' => 'required|max:100',
            'hubungan' => 'required|max:50',
            'no_hp_pembiayai' => 'required|max:20',
            'diterima_dikelas' => 'required|max:50',
            'diterima_semester' => 'required|max:50',
        ]);



        $pendaftaran = new Pendaftaran();
        $pendaftaran->kode_pendaftaran = $kodePendaftaran;
        $pendaftaran->nama = $validatedData['nama'];
        $pendaftaran->nisn = $validatedData['nisn'];
        $pendaftaran->no_kk = $validatedData['no_kk'];
        $pendaftaran->no_nik = $validatedData['no_nik'];
        $pendaftaran->tempat_lahir = $validatedData['tempat_lahir'];
        $pendaftaran->tgl_lahir = $validatedData['tgl_lahir'];
        $pendaftaran->jenis_kelamin = $validatedData['jenis_kelamin'];
        $pendaftaran->golongan_darah = $validatedData['golongan_darah'];
        $pendaftaran->anak_ke = $validatedData['anak_ke'];
        $pendaftaran->anak_ke_dari = $validatedData['anak_ke_dari'];
        $pendaftaran->saudara_tiri = $validatedData['saudara_tiri'];
        $pendaftaran->saudara_kandung = $validatedData['saudara_kandung'];
        $pendaftaran->status_dalam_keluarga = $validatedData['status_dalam_keluarga'];
        $pendaftaran->tinggal_dengan = $validatedData['tinggal_dengan'];
        $pendaftaran->alamat_lengkap = $validatedData['alamat_lengkap'];
        $pendaftaran->handphone = $validatedData['handphone'];
        $pendaftaran->koordinat_rumah = $validatedData['koordinat_rumah'];
        $pendaftaran->jaraktempuh = $validatedData['jaraktempuh'];
        $pendaftaran->waktutempuh = $validatedData['waktutempuh'];
        $pendaftaran->transportasi = $validatedData['transportasi'];
        $pendaftaran->hobi = $validatedData['hobi'];
        $pendaftaran->citacita = $validatedData['citacita'];
        $pendaftaran->imunisasi = $validatedData['imunisasi'];
        $pendaftaran->nama_ayah_kandung = $validatedData['nama_ayah_kandung'];
        $pendaftaran->tempat_lahir_ayah = $validatedData['tempat_lahir_ayah'];
        $pendaftaran->tgl_lahir_ayah = $validatedData['tgl_lahir_ayah'];
        $pendaftaran->no_nik_ayah = $validatedData['no_nik_ayah'];
        $pendaftaran->nama_ibu_ayah = $validatedData['nama_ibu_ayah'];
        $pendaftaran->status_ayah = $validatedData['status_ayah'];
        $pendaftaran->pendidikan_ayah = $validatedData['pendidikan_ayah'];
        $pendaftaran->pekerjaan_ayah = $validatedData['pekerjaan_ayah'];
        $pendaftaran->penghasilan_ayah = $validatedData['penghasilan_ayah'];
        $pendaftaran->domisili_tempat_ayah = $validatedData['domisili_tempat_ayah'];
        $pendaftaran->status_tempat_ayah = $validatedData['status_tempat_ayah'];
        $pendaftaran->alamat_rumah_ayah = $validatedData['alamat_rumah_ayah'];
        $pendaftaran->no_hp_ayah = $validatedData['no_hp_ayah'];
        $pendaftaran->nama_ibu_kandung = $validatedData['nama_ibu_kandung'];
        $pendaftaran->tempat_lahir_ibu = $validatedData['tempat_lahir_ibu'];
        $pendaftaran->tgl_lahir_ibu = $validatedData['tgl_lahir_ibu'];
        $pendaftaran->no_nik_ibu = $validatedData['no_nik_ibu'];
        $pendaftaran->nama_ibu_ibu = $validatedData['nama_ibu_ibu'];
        $pendaftaran->status_ibu = $validatedData['status_ibu'];
        $pendaftaran->pendidikan_ibu = $validatedData['pendidikan_ibu'];
        $pendaftaran->pekerjaan_ibu = $validatedData['pekerjaan_ibu'];
        $pendaftaran->penghasilan_ibu = $validatedData['penghasilan_ibu'];
        $pendaftaran->domisili_tempat_ibu = $validatedData['domisili_tempat_ibu'];
        $pendaftaran->status_tempat_ibu = $validatedData['status_tempat_ibu'];
        $pendaftaran->alamat_rumah_ibu = $validatedData['alamat_rumah_ibu'];
        $pendaftaran->no_hp_ibu = $validatedData['no_hp_ibu'];
        $pendaftaran->bantuan_pemerintah = $validatedData['bantuan_pemerintah'];
        $pendaftaran->no_kip = $validatedData['no_kip'];
        $pendaftaran->no_kk_kip = $validatedData['no_kk_kip'];
        $pendaftaran->nama_kepala_kip = $validatedData['nama_kepala_kip'];
        $pendaftaran->nama_wali_kandung = $validatedData['nama_wali_kandung'];
        $pendaftaran->tempat_lahir_wali = $validatedData['tempat_lahir_wali'];
        $pendaftaran->tgl_lahir_wali = $validatedData['tgl_lahir_wali'];
        $pendaftaran->no_nik_wali = $validatedData['no_nik_wali'];
        $pendaftaran->nama_ibu_wali = $validatedData['nama_ibu_wali'];
        $pendaftaran->status_wali = $validatedData['status_wali'];
        $pendaftaran->pendidikan_wali = $validatedData['pendidikan_wali'];
        $pendaftaran->pekerjaan_wali = $validatedData['pekerjaan_wali'];
        $pendaftaran->penghasilan_wali = $validatedData['penghasilan_wali'];
        $pendaftaran->domisili_tempat_wali = $validatedData['domisili_tempat_wali'];
        $pendaftaran->status_tempat_wali = $validatedData['status_tempat_wali'];
        $pendaftaran->alamat_rumah_wali = $validatedData['alamat_rumah_wali'];
        $pendaftaran->no_hp_wali = $validatedData['no_hp_wali'];
        $pendaftaran->asal_sekolah = $validatedData['asal_sekolah'];
        $pendaftaran->nama_asal_sekolah = $validatedData['nama_asal_sekolah'];
        $pendaftaran->alamat_sekolah_asal = $validatedData['alamat_sekolah_asal'];
        $pendaftaran->ijazah_yang_diterima = $validatedData['ijazah_yang_diterima'];
        $pendaftaran->tahun_lulus_ijazah = $validatedData['tahun_lulus_ijazah'];
        $pendaftaran->no_ijazah = $validatedData['no_ijazah'];
        $pendaftaran->sertifikat_ujian = $validatedData['sertifikat_ujian'];
        $pendaftaran->tahun_lulus_ujian = $validatedData['tahun_lulus_ujian'];
        $pendaftaran->no_sertifikatujian_shun = $validatedData['no_sertifikatujian_shun'];
        $pendaftaran->no_peserta_un = $validatedData['no_peserta_un'];
        $pendaftaran->nilai_ratarata_ijazah = $validatedData['nilai_ratarata_ijazah'];
        $pendaftaran->nilai_ratarata_um = $validatedData['nilai_ratarata_um'];
        $pendaftaran->no_induk_sekolah_asal = $validatedData['no_induk_sekolah_asal'];
        $pendaftaran->no_statistik_madrasah = $validatedData['no_statistik_madrasah'];
        $pendaftaran->npsn_sekolah_asal = $validatedData['npsn_sekolah_asal'];
        $pendaftaran->nama_pembiayai = $validatedData['nama_pembiayai'];
        $pendaftaran->hubungan = $validatedData['hubungan'];
        $pendaftaran->no_hp_pembiayai = $validatedData['no_hp_pembiayai'];
        $pendaftaran->diterima_dikelas = $validatedData['diterima_dikelas'];
        $pendaftaran->diterima_semester = $validatedData['diterima_semester'];
        $pendaftaran->kode = $kodevoucher;
        $pendaftaran->insider = $insider;
        $pendaftaran->outsider = $outsider;

        // Save the model
        $pendaftaran->save();

        return redirect('/')->with('success', ['title' => 'Berhasil Mendaftar', 'message' => 'Berikut Kode Pendaftaran Anda '.$kodePendaftaran]);

        // dd($pendaftaran);


        // return response()->json(['message' => 'Data saved successfully'], 200);
        // $this->generateFormPDF($pendaftaran);
        

    }

    private function generateFormPDF($pendaftaran)
    {
    
        // Generate konten HTML untuk PDF menggunakan data pendaftaran
        $pdfContent = view('pdf_pendaftaran', compact('pendaftaran'))->render();

        // Inisialisasi TCPDF
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');

        // Set dokumen PDF
        $pdf->SetCreator('AL FALAH');
        $pdf->SetAuthor('al-falah');
        $pdf->SetTitle('Formulir Pendaftaran');

        // Tambahkan halaman baru
        $pdf->AddPage();

        // Tulis konten HTML ke dalam dokumen PDF
        $pdf->writeHTML($pdfContent, true, false, true, false, '');

        // Simpan file PDF
        $fileName = 'form_pendaftaran.pdf';
        $pdfFilePath = storage_path('app/public/') . $fileName;
        $pdf->Output($pdfFilePath, 'F');

        // Set header HTTP untuk mengunduh file
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $fileName . '"');
        header('Content-Length: ' . filesize($pdfFilePath));

        // Baca file PDF dan kirimkan isinya ke output
        readfile($pdfFilePath);

        // Hapus file PDF setelah dikirim
        unlink($pdfFilePath);

        // return $pdfFilePath;
    }
    
    public function updateNominal(Request $request)
    {
        $request->validate([
            // 'kode' => 'required',
            'gelombang' => 'required'
        ]);

        $kode = $request->input('kode');
        $gelombang = $request->input('gelombang');

        $dataKode = Kode::where('kode', $kode)->first();

        if ($dataKode) {
            $datagelombang = Gelombang::where('nama_gelombang',$gelombang)->first(); // Ganti dengan model yang sesuai

            $insider = $datagelombang->nominal1 - $dataKode->nominal;
            $outsider = $datagelombang->nominal2 - $dataKode->nominal;

            // $datagelombang->nominal1 = $insider;
            // $datagelombang->nominal2 = $outsider;
            // $datagelombang->save();

            return response()->json(['success' => true, 'insider' => $insider, 'outsider' => $outsider]);
        } else {
            return response()->json(['success' => false, 'message' => 'Kode tidak valid']);
        }
    }
    
}
