<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>AL Falah</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  
  <!-- Favicons -->
  <link href="/assets/img/logo.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="/assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/assets/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="/assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/assets/css/style.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">ma_alfalahjkt@yahoo.com</a>
        <i class="fa fa-phone"></i> 021 536 70317
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section>


  <!--==========================
    Form Pendaftaran
  ============================-->

<h2 style="text-align: center; margin-top:2%"><b> FORMULIR PENDAFTARAN PESERTA DIDIK BARU </b></h2>

<form action="{{route('verifikasidata', ['id' => $dataPendaftaran->id]) }}" method="GET" enctype="multipart/form-data">
  @csrf 

  <section id="registration">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="section-header">
            <h2>DATA PESERTA DIDIK</h2>
            <p></p>
          </div>          
            <div class="form-group">
              <label for="nama"><b>Nama Lengkap Siswa : </b></label>
              <input type="text" class="form-control" value="{{$dataPendaftaran->nama}}"  id="nama" name="nama"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nisn :</b></label>
              <input type="number" class="form-control" id="nisn" name="nisn"  value="{{$dataPendaftaran->nisn}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nomor Kartu Keluarga (KK) :</b></label>
              <input type="number" class="form-control" id="no_kk" name="no_kk"  value="{{$dataPendaftaran->no_kk}}"  disabled required>
            </div>

            
            <div class="form-group">
              <label for="nama"><b>Nomor Induk Keluarga (NIK) :</b></label>
              <input type="number" class="form-control" id="no_nik" name="no_nik"  value="{{$dataPendaftaran->no_nik}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Tempat Kelahiran :</b></label>
              <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"  value="{{$dataPendaftaran->tempat_lahir}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Tanggal Lahir :</b></label>
              <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{$dataPendaftaran->tgl_lahir}}"   disabled required>
            </div>

            
            <div class="form-group">
              <label for="nama"><b>Jenis Kelamin :</b></label>
              <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{$dataPendaftaran->jenis_kelamin}}"   disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Golongan Darah :</b></label>
              <input type="text" class="form-control" id="golongan_darah" name="golongan_darah" value="{{$dataPendaftaran->golongan_darah}}"   disabled required>
            </div>

            <div class="form-group">
              <label for="anak_ke"><b>Anak Ke</b> :</label>
              <input type="number" class="form-control" value="{{$dataPendaftaran->anak_ke}}" id="anak_ke" name="anak_ke"  disabled required>
            </div>

            
            <div class="form-group">
              <label for="anak_ke_dari"><b>Dari</b> :</label>
              <input type="number" class="form-control" id="anak_ke_dari" name="anak_ke_dari" value="{{$dataPendaftaran->anak_ke_dari}}"   disabled required>
            </div>

            <div class="form-group">
              <label for="saudara_tiri"><b>Jumlah Saudara Tiri :</b></label>
              <input type="number" class="form-control" id="saudara_tiri" name="saudara_tiri" value="{{$dataPendaftaran->saudara_tiri}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="saudara_kandung"><b>Jumlah Saudara Kandung :</b></label>
              <input type="number" class="form-control" id="saudara_kandung" name="saudara_kandung" value="{{$dataPendaftaran->saudara_kandung}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="saudara_kandung"><b>Status Dalam Keluarga :</b></label>
              <input type="number" class="form-control" id="status_dalam_keluarga" name="status_dalam_keluarga" value="{{$dataPendaftaran->status_dalam_keluarga}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="saudara_kandung"><b>Tinggal Dengan :</b></label>
              <input type="text" class="form-control" id="tinggal_dengan" name="tinggal_dengan" value="{{$dataPendaftaran->tinggal_dengan}}"  disabled required>
            </div>
 

            <div class="form-group">
              <label for="alamat_lengkap"><b>Alamat Lengkap Siswa:</b></label>
              <input type="text" class="form-control" id="alamat_lengkap" name="alamat_lengkap" value="{{$dataPendaftaran->alamat_lengkap}}"  disabled required>
            </div>


            <div class="form-group">
              <label for="handphone"><b>Handphone :</b></label>
              <input type="number" class="form-control" id="handphone" name="handphone" value="{{$dataPendaftaran->handphone}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="koordinat_rumah"><b>Koordinat Rumah :</b></label>
              <input type="text" class="form-control" id="koordinat_rumah" name="koordinat_rumah" value="{{$dataPendaftaran->koordinat_rumah}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="jaraktempuh"><b>Jarak Tempuh Ke Madrasah :</b></label>
              <input type="text" class="form-control" id="jaraktempuh" name="jaraktempuh" value="{{$dataPendaftaran->jaraktempuh}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="waktutempuh"><b>Waktu Tempuh Ke Madrasah :</b></label>
              <input type="text" class="form-control" id="waktutempuh" name="waktutempuh" value="{{$dataPendaftaran->waktutempuh}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="transportasi"><b>Transportasi Yang Digunakan :</b></label>
              <input type="text" class="form-control" id="transportasi" name="transportasi" value="{{$dataPendaftaran->transportasi}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="hobi"><b>Hobi Siswa :</b></label>
              <input type="text" class="form-control" id="hobi" name="hobi" value="{{$dataPendaftaran->hobi}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="citacita"><b>Cita - Cita Siswa :</b></label>
              <input type="text" class="form-control" id="citacita" name="citacita" value="{{$dataPendaftaran->citacita}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="imunisasi"><b>Imunisasi Yang Sudah Pernah :</b></label>
              <input type="text" class="form-control" id="imunisasi" name="imunisasi" value="{{$dataPendaftaran->imunisasi}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nama Ayah Kandung : </b></label>
              <input type="text" class="form-control" id="nama_ayah_kandung" name="nama_ayah_kandung" value="{{$dataPendaftaran->nama_ayah_kandung}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Tempat Kelahiran :</b></label>
              <input type="text" class="form-control" id="tempat_lahir_ayah" name="tempat_lahir_ayah" value="{{$dataPendaftaran->tempat_lahir_ayah}}"  disabled required>
            </div>


            <div class="form-group">
              <label for="nama"><b>Tanggal Lahir :</b></label>
              <input type="date" class="form-control" id="tgl_lahir_ayah" name="tgl_lahir_ayah" value="{{$dataPendaftaran->tgl_lahir_ayah}}"  disabled required>
            </div>


           
        </div>
      </div>
    </div>
  </section>


  <section id="registration" style="margin-top: 5%">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="section-header">
            <h2>DATA ORANG TUA</h2>
            <p></p>
          </div>          
           
          <h3>Data Ayah</h3>

            <div class="form-group">
              <label for="nama"><b>Nama Ayah Kandung : </b></label>
              <input type="text" class="form-control" id="nama_ayah_kandung" name="nama_ayah_kandung" value="{{$dataPendaftaran->nama_ayah_kandung}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Tempat Kelahiran :</b></label>
              <input type="text" class="form-control" id="tempat_lahir_ayah" name="tempat_lahir_ayah" value="{{$dataPendaftaran->tempat_lahir_ayah}}"  disabled required>
            </div>


            <div class="form-group">
              <label for="nama"><b>Tanggal Lahir :</b></label>
              <input type="date" class="form-control" id="tgl_lahir_ayah" name="tgl_lahir_ayah" value="{{$dataPendaftaran->tgl_lahir_ayah}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nik Ayah Kandung :</b></label>
              <input type="text" class="form-control" id="no_nik_ayah" name="no_nik_ayah" value="{{$dataPendaftaran->no_nik_ayah}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nama Ibu Kandung Ayah :</b></label>
              <input type="text" class="form-control" id="nama_ibu_ayah" name="nama_ibu_ayah" value="{{$dataPendaftaran->nama_ibu_ayah}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Status Ayah :</b></label>
              <input type="text" class="form-control" id="status_ayah" name="status_ayah" value="{{$dataPendaftaran->status_ayah}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Pendidikan Ayah :</b></label>
              <input type="text" class="form-control" id="pendidikan_ayah" name="pendidikan_ayah" value="{{$dataPendaftaran->pendidikan_ayah}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Pekerjaan Ayah :</b></label>
              <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" value="{{$dataPendaftaran->pekerjaan_ayah}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Penghasilan Ayah Perbulan :</b></label>
              <input type="number" class="form-control" id="penghasilan_ayah" name="penghasilan_ayah" value="{{$dataPendaftaran->penghasilan_ayah}}"   disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Domisili Tempat Tinggal :</b></label>
              <input type="text" class="form-control" id="domisili_tempat_ayah" name="domisili_tempat_ayah" value="{{$dataPendaftaran->domisili_tempat_ayah}}"   disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Status Tempat Tinggal :</b></label>
              <input type="text" class="form-control" id="status_tempat_ayah" name="status_tempat_ayah" value="{{$dataPendaftaran->status_tempat_ayah}}"   disabled required>
            </div>


            <div class="form-group">
              <label for="nama"><b>Alamat Rumah Ayah :</b></label>
              <input type="text" class="form-control" id="alamat_rumah_ayah" name="alamat_rumah_ayah" value="{{$dataPendaftaran->alamat_rumah_ayah}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Handphone ayah :</b></label>
              <input type="number" class="form-control" id="no_hp_ayah" name="no_hp_ayah" value="{{$dataPendaftaran->no_hp_ayah}}"  disabled required>
            </div>






            <h3 style="margin-top: 5%">Data Ibu</h3>


            <div class="form-group">
              <label for="nama"><b>Nama Ibu Kandung : </b></label>
              <input type="text" class="form-control" id="nama_ibu_kandung" name="nama_ibu_kandung" value="{{$dataPendaftaran->nama_ibu_kandung}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Tempat Kelahiran :</b></label>
              <input type="text" class="form-control" id="tempat_lahir_ibu" name="tempat_lahir_ibu" value="{{$dataPendaftaran->tempat_lahir_ibu}}"  disabled required>
            </div>


            <div class="form-group">
              <label for="nama"><b>Tanggal Lahir :</b></label>
              <input type="date" class="form-control" id="tgl_lahir_ibu" name="tgl_lahir_ibu" value="{{$dataPendaftaran->tgl_lahir_ibu}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nik Ibu Kandung :</b></label>
              <input type="text" class="form-control" id="no_nik_ibu" name="no_nik_ibu" value="{{$dataPendaftaran->no_nik_ibu}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nama Ibu Kandung Ibu :</b></label>
              <input type="text" class="form-control" id="nama_ibu_ibu" name="nama_ibu_ibu" value="{{$dataPendaftaran->nama_ibu_ibu}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Status Ibu :</b></label>
              <input type="text" class="form-control" id="status_ibu" name="status_ibu" value="{{$dataPendaftaran->status_ibu}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Pendidikan Ibu :</b></label>
              <input type="text" class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" value="{{$dataPendaftaran->pendidikan_ibu}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Pekerjaan Ibu :</b></label>
              <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" value="{{$dataPendaftaran->pekerjaan_ibu}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Penghasilan Ibu Perbulan :</b></label>
              <input type="number" class="form-control" id="penghasilan_ibu" name="penghasilan_ibu" value="{{$dataPendaftaran->penghasilan_ibu}}"   disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Domisili Tempat Tinggal :</b></label>
              <input type="text" class="form-control" id="domisili_tempat_ibu" name="domisili_tempat_ibu" value="{{$dataPendaftaran->domisili_tempat_ibu}}"   disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Status Tempat Tinggal :</b></label>
              <input type="text" class="form-control" id="status_tempat_ibu" name="status_tempat_ibu" value="{{$dataPendaftaran->status_tempat_ibu}}"   disabled required>
            </div>


            <div class="form-group">
              <label for="nama"><b>Alamat Rumah Ibu :</b></label>
              <input type="text" class="form-control" id="alamat_rumah_ibu" name="alamat_rumah_ibu" value="{{$dataPendaftaran->alamat_rumah_ibu}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Handphone Ibu :</b></label>
              <input type="number" class="form-control" id="no_hp_ibu" name="no_hp_ibu" value="{{$dataPendaftaran->no_hp_ibu}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Bantuan Yang Diterima Dari Pemerintah :</b></label>
              <input type="text" class="form-control" id="bantuan_pemerintah" name="bantuan_pemerintah" value="{{$dataPendaftaran->bantuan_pemerintah}}"  disabled required>
            </div>

            
            <div class="form-group">
              <label for="nama"><b>Nomor KIP :</b></label>
              <input type="text" class="form-control" id="no_kip" name="no_kip"  value="{{$dataPendaftaran->no_kip}}"  disabled required>
            </div>

               
            <div class="form-group">
              <label for="nama"><b>Nomor Kartu Keluarga KIP :</b></label>
              <input type="text" class="form-control" id="no_kk_kip" name="no_kk_kip"  value="{{$dataPendaftaran->no_kk_kip}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nama Kartu Keluarga KIP :</b></label>
              <input type="text" class="form-control" id="nama_kepala_kip" name="nama_kepala_kip"  value="{{$dataPendaftaran->nama_kepala_kip}}"  disabled required>
            </div>

        </div>
      </div>
    </div>
  </section>


  <section id="registration" style="margin-top: 5%">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="section-header">
            <h2>DATA WALI</h2>
            <p></p>
          </div>          
          

          <div class="form-group">
            <label for="nama"><b>Nama Wali Kandung : </b></label>
            <input type="text" class="form-control" id="nama_wali_kandung" name="nama_wali_kandung" value="{{$dataPendaftaran->nama_wali_kandung}}"  disabled required>
          </div>

          <div class="form-group">
            <label for="nama"><b>Tempat Kelahiran :</b></label>
            <input type="text" class="form-control" id="tempat_lahir_wali" name="tempat_lahir_wali" value="{{$dataPendaftaran->tempat_lahir_wali}}"  disabled required>
          </div>


          <div class="form-group">
            <label for="nama"><b>Tanggal Lahir :</b></label>
            <input type="date" class="form-control" id="tgl_lahir_wali" name="tgl_lahir_wali" value="{{$dataPendaftaran->tgl_lahir_wali}}"  disabled required>
          </div>

          <div class="form-group">
            <label for="nama"><b>Nik Wali Kandung :</b></label>
            <input type="text" class="form-control" id="no_nik_wali" name="no_nik_wali" value="{{$dataPendaftaran->no_nik_wali}}"  disabled required>
          </div>

          <div class="form-group">
            <label for="nama"><b>Nama Ibu Kandung Wali :</b></label>
            <input type="text" class="form-control" id="nama_ibu_wali" name="nama_ibu_wali" value="{{$dataPendaftaran->nama_ibu_wali}}"  disabled required>
          </div>

          <div class="form-group">
            <label for="nama"><b>Status Wali :</b></label>
            <input type="text" class="form-control" id="status_wali" name="status_wali" value="{{$dataPendaftaran->status_wali}}"  disabled required>
          </div>

          <div class="form-group">
            <label for="nama"><b>Pendidikan Wali :</b></label>
            <input type="text" class="form-control" id="pendidikan_wali" name="pendidikan_wali" value="{{$dataPendaftaran->pendidikan_wali}}"  disabled required>
          </div>

          <div class="form-group">
            <label for="nama"><b>Pekerjaan Wali :</b></label>
            <input type="text" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali" value="{{$dataPendaftaran->pekerjaan_wali}}"  disabled required>
          </div>

          <div class="form-group">
            <label for="nama"><b>Penghasilan Wali Perbulan :</b></label>
            <input type="number" class="form-control" id="penghasilan_wali" name="penghasilan_wali" value="{{$dataPendaftaran->penghasilan_wali}}"   disabled required>
          </div>

          <div class="form-group">
            <label for="nama"><b>Domisili Tempat Tinggal :</b></label>
            <input type="text" class="form-control" id="domisili_tempat_wali" name="domisili_tempat_wali" value="{{$dataPendaftaran->domisili_tempat_wali}}"   disabled required>
          </div>

          <div class="form-group">
            <label for="nama"><b>Status Tempat Tinggal :</b></label>
            <input type="text" class="form-control" id="status_tempat_wali" name="status_tempat_wali" value="{{$dataPendaftaran->status_tempat_wali}}"   disabled required>
          </div>


          <div class="form-group">
            <label for="nama"><b>Alamat Rumah Wali :</b></label>
            <input type="text" class="form-control" id="alamat_rumah_wali" name="alamat_rumah_wali" value="{{$dataPendaftaran->alamat_rumah_wali}}"  disabled required>
          </div>

          <div class="form-group">
            <label for="nama"><b>Handphone Wali :</b></label>
            <input type="number" class="form-control" id="no_hp_wali" name="no_hp_wali" value="{{$dataPendaftaran->no_hp_wali}}"  disabled required>
          </div>

        </div>
      </div>
    </div>
  </section>


  
  <section id="registration" style="margin-top: 5%">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="section-header">
            <h2>KETERANGAN LAINNYA BAGI CALON SISWA</h2>
            <p></p>
          </div>          
           

            <div class="form-group">
              <label for="nama"><b>Asal Sekolah </b></label>
              <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" value="{{$dataPendaftaran->asal_sekolah}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nama Asal Sekolah :</b></label>
              <input type="text" class="form-control" id="nama_asal_sekolah" name="nama_asal_sekolah"  value="{{$dataPendaftaran->nama_asal_sekolah}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Alamat Sekolah Asal  :</b></label>
              <input type="text" class="form-control" id="alamat_sekolah_asal" name="alamat_sekolah_asal"  value="{{$dataPendaftaran->alamat_sekolah_asal}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Ijazah Yang Diterima  :</b></label>
              <input type="text" class="form-control" id="ijazah_yang_diterima" name="ijazah_yang_diterima"  value="{{$dataPendaftaran->ijazah_yang_diterima}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Tahun Lulus  :</b></label>
              <input type="date" class="form-control" id="tahun_lulus_ijazah" name="tahun_lulus_ijazah"  value="{{$dataPendaftaran->tahun_lulus_ijazah}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nomor Ijazah :</b></label>
              <input type="text" class="form-control" id="no_ijazah" name="no_ijazah"  value="{{$dataPendaftaran->no_ijazah}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Sertifikat Ujian / UM  :</b></label>
              <input type="text" class="form-control" id="sertifikat_ujian" name="sertifikat_ujian"  value="{{$dataPendaftaran->sertifikat_ujian}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Tahun Lulus  :</b></label>
              <input type="date" class="form-control" id="tahun_lulus_ujian" name="tahun_lulus_ujian"  value="{{$dataPendaftaran->tahun_lulus_ujian}}"  disabled required>
            </div>

            
            <div class="form-group">
              <label for="nama"><b>Nomor Sertifikat Ujian / SHUN :</b></label>
              <input type="number" class="form-control" id="no_sertifikatujian_shun" name="no_sertifikatujian_shun"  value="{{$dataPendaftaran->no_sertifikatujian_shun}}"  disabled required>
            </div>

                 
            <div class="form-group">
              <label for="nama"><b>Nomor Peserta UN :</b></label>
              <input type="number" class="form-control" id="no_peserta_un" name="no_peserta_un" value="{{$dataPendaftaran->no_peserta_un}}"   disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nilai Rata Rata Ijazah :</b></label>
              <input type="number" class="form-control" id="nilai_ratarata_ijazah" name="nilai_ratarata_ijazah"  value="{{$dataPendaftaran->nilai_ratarata_ijazah}}"  disabled required>
            </div>

            
            <div class="form-group">
              <label for="nama"><b>Nilai Rata Rata um :</b></label>
              <input type="number" class="form-control" id="nilai_ratarata_um" name="nilai_ratarata_um" value="{{$dataPendaftaran->nilai_ratarata_um}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nomor Induk Sekolah Asal :</b></label>
              <input type="number" class="form-control" id="no_induk_sekolah_asal" name="no_induk_sekolah_asal" value="{{$dataPendaftaran->no_induk_sekolah_asal}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nomor Statistik Madrasah :</b></label>
              <input type="number" class="form-control" id="no_statistik_madrasah" name="no_statistik_madrasah" value="{{$dataPendaftaran->no_statistik_madrasah}}"  disabled required>
            </div>

            <div class="form-group">
              <label for="nama"><b>NPSN Sekolah Asal :</b></label>
              <input type="number" class="form-control" id="npsn_sekolah_asal" name="npsn_sekolah_asal" value="{{$dataPendaftaran->npsn_sekolah_asal}}"  disabled required>
            </div>

        </div>
      </div>
    </div>
  </section>

  <section id="registration" style="margin-top: 5%;  background:#4fa376; padding:10%">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-header">
                    <h2>Biaya Pendaftaran</h2>
                    <p></p>
                </div>

                @php
                    $gelombang = $datagelombang->nama_gelombang;
                    $insider = $datagelombang->nominal1;
                    $outsider = $datagelombang->nominal2;
                @endphp 

                <div class="form-group" >
                    <label><b>Gelombang :</b></label>
                    <label><b>Anda Masuk {{$gelombang}}</b></label>
                </div>

                <div class="form-group">
                    <label><b>Pembayaran Sebelum Diskon </b></label><br>
                    
                    <label><b>Insider :  </b></label> <br>
                    <input type="text" style="width: 50%" class="form-control" id="insider" value="{{ number_format($insider, 0, ',', '.') }}" name="insider"  disabled required>

                    <label><b>Outsider :  </b></label> <br>
                    <input type="text" style="width: 50%" class="form-control" id="outsider" value="{{ number_format($outsider, 0, ',', '.') }}" name="outsider"  disabled required>

                </div>

                
                <div class="form-group">
                  <label><b>Menggunakan Voucher </b></label><br>
                  
                  <label><b>Kode :  </b></label> <br>
                  <input type="text" style="width: 50%" class="form-control" id="insider" value="{{ $dataPendaftaran->kode }}" name="kode"  disabled required>

              </div>



                <div class="form-group">
                  <label><b>Pembayaran Yang Harus Dibayar </b></label><br>
                  
                  <label><b>Insider :  </b></label> <br>
                  <input type="text" style="width: 50%" class="form-control" id="insider" value="{{ number_format($dataPendaftaran->insider, 0, ',', '.') }}" name="insider"  disabled required>

                  <label><b>Outsider : </b></label> <br>
                  <input type="text" style="width: 50%" class="form-control" id="outsider" value="{{ number_format($dataPendaftaran->outsider, 0, ',', '.') }}" name="outsider"  disabled required>

              </div>


            </div>
        </div>
    </div>
</section>


  <section id="registration" style="margin-top: 5%">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="section-header">
            <h2>YANG MEMBIAYAI SEKOLAH</h2>
            <p></p>
          </div>          


          <div class="form-group">
            <label for="nama"><b>Nama Yang Membiayai :</b></label>
            <input type="text" class="form-control" id="nama_pembiayai" name="nama_pembiayai" value="{{$dataPendaftaran->nama_pembiayai}}"  disabled required>
          </div>

          <div class="form-group">
            <label for="nama"><b>Hubungan :</b></label>
            <input type="text" class="form-control" id="hubungan" name="hubungan" value="{{$dataPendaftaran->hubungan}}"  disabled required>
          </div>


          <div class="form-group">
            <label for="nama"><b>Nomor Handphone :</b></label>
            <input type="text" class="form-control" id="no_hp_pembiayai" name="no_hp_pembiayai" value="{{$dataPendaftaran->no_hp_pembiayai}}"  disabled required>
          </div>


        </div>
      </div>
    </div>
  </section>


  <section id="registration" style="margin-top: 5%">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="section-header">
            <h2>DITERIMA DISEKOLAH INI</h2>
            <p></p>
          </div>          



          <div class="form-group">
            <label for="nama"><b>Dikelas :</b></label>
            <input type="text" class="form-control" id="diterima_dikelas" name="diterima_dikelas" value="{{$dataPendaftaran->diterima_dikelas}}"  disabled required>
          </div>

          <div class="form-group">
            <label for="nama"><b>Semester :</b></label>
            <input type="text" class="form-control" id="diterima_semester" name="diterima_semester" value="{{$dataPendaftaran->diterima_semester}}"  disabled required>
          </div>

        </div>
      </div>
    </div>
  </section>

  <button type="submit" style="background:#4fa376; color:white" class="btn btn-coklat btn-user btn-block"> Verifikasi Data </button>

</form>
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>AL-FALAH</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="/assets/lib/jquery/jquery.min.js"></script>
  <script src="/assets/lib/jquery/jquery-migrate.min.js"></script>
  <script src="/assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/lib/easing/easing.min.js"></script>
  <script src="/assets/lib/superfish/hoverIntent.js"></script>
  <script src="/assets/lib/superfish/superfish.min.js"></script>
  <script src="/assets/lib/wow/wow.min.js"></script>
  <script src="/assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="/assets/lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="/assets/lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="/assets/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="/assets/js/main.js"></script>
  

</body>
</html>
