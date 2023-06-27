<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>AL Falah</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="assets/css/style.css" rel="stylesheet">

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

<form action="{{ route('sendPendaftaran') }}" method="POST" enctype="multipart/form-data">
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
              <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nisn :</b></label>
              <input type="number" class="form-control" id="nisn" name="nisn" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nomor Kartu Keluarga (KK) :</b></label>
              <input type="number" class="form-control" id="no_kk" name="no_kk" required>
            </div>

            
            <div class="form-group">
              <label for="nama"><b>Nomor Induk Keluarga (NIK) :</b></label>
              <input type="number" class="form-control" id="no_nik" name="no_nik" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Tempat Kelahiran :</b></label>
              <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Tanggal Lahir :</b></label>
              <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
            </div>

            <div class="form-group">
              <label><b>Jenis Kelamin :</b></label>
              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="Laki-laki" required>
                <label class="form-check-label" for="laki_laki">
                  Laki-laki
                </label>
              </div>
              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" required>
                <label class="form-check-label" for="perempuan">
                  Perempuan
                </label>
              </div>
            </div>

            <div class="form-group">
              <label><b>Golongan Darah :</b></label>
              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="golongan_darah" id="A" value="A" required>
                <label class="form-check-label" for="A">
                  A
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="golongan_darah" id="B" value="B" required>
                <label class="form-check-label" for="B">
                  B
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="golongan_darah" id="AB" value="AB" required>
                <label class="form-check-label" for="AB">
                  AB
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="golongan_darah" id="laki_laki" value="O" required>
                <label class="form-check-label" for="O">
                  O
                </label>
              </div>
              
            </div>

            <div class="form-group">
              <label for="anak_ke"><b>Anak Ke</b> :</label>
              <input type="number" class="form-control" id="anak_ke" name="anak_ke" required>
            </div>

            
            <div class="form-group">
              <label for="anak_ke_dari"><b>Dari</b> :</label>
              <input type="number" class="form-control" id="anak_ke_dari" name="anak_ke_dari" required>
            </div>

            <div class="form-group">
              <label for="saudara_tiri"><b>Jumlah Saudara Tiri :</b></label>
              <input type="number" class="form-control" id="saudara_tiri" name="saudara_tiri" required>
            </div>

            <div class="form-group">
              <label for="saudara_kandung"><b>Jumlah Saudara Kandung :</b></label>
              <input type="number" class="form-control" id="saudara_kandung" name="saudara_kandung" required>
            </div>

            <div class="form-group">
              <label for="saudara_tiri"><b>Jumlah Saudara Tiri :</b></label>
              <input type="number" class="form-control" id="saudara_tiri" name="saudara_tiri" required>
            </div>

            <div class="form-group">
              <label><b>Status Dalam Keluarga :</b></label>
              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="status_dalam_keluarga" id="kandung" value="kandung" required>
                <label class="form-check-label" for="kandung">
                  Kandung
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="status_dalam_keluarga" id="tiri" value="tiri" required>
                <label class="form-check-label" for="tiri">
                  Tiri
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="status_dalam_keluarga" id="asuh" value="asuh" required>
                <label class="form-check-label" for="asuh">
                  Asuh
                </label>
              </div>

            </div>

            <div class="form-group">
              <label><b>Tinggal Dengan :</b></label>
              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="tinggal_dengan" id="orangtuakandung" value="orangtuakandung" required>
                <label class="form-check-label" for="orangtuakandung">
                  Orang Tua Kandung
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="tinggal_dengan" id="orangtuaasuh" value="orangtuaasuh" required>
                <label class="form-check-label" for="orangtuaasuh">
                  Orang Tua Asuh
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="tinggal_dengan" id="saudara" value="saudara" required>
                <label class="form-check-label" for="saudara">
                  Saudara
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="tinggal_dengan" id="pantiasuhan" value="pantiasuhan" required>
                <label class="form-check-label" for="pantiasuhan">
                  Panti Asuhan
                </label>
              </div>

            </div>

            <div class="form-group">
              <label for="alamat_lengkap"><b>Alamat Lengkap Siswa:</b></label>
              <input type="text" class="form-control" id="alamat_lengkap" name="alamat_lengkap" required>
            </div>


            <div class="form-group">
              <label for="handphone"><b>Handphone :</b></label>
              <input type="number" class="form-control" id="handphone" name="handphone" required>
            </div>

            <div class="form-group">
              <label for="koordinat_rumah"><b>Koordinat Rumah :</b></label>
              <input type="text" class="form-control" id="koordinat_rumah" name="koordinat_rumah" required>
            </div>

            <div class="form-group">
              <label for="jaraktempuh"><b>Jarak Tempuh Ke Madrasah :</b></label>
              <input type="text" class="form-control" id="jaraktempuh" name="jaraktempuh" required>
            </div>

            <div class="form-group">
              <label for="waktutempuh"><b>Waktu Tempuh Ke Madrasah :</b></label>
              <input type="text" class="form-control" id="waktutempuh" name="waktutempuh" required>
            </div>

            <div class="form-group">
              <label for="transportasi"><b>Transportasi Yang Digunakan :</b></label>
              <input type="text" class="form-control" id="transportasi" name="transportasi" required>
            </div>

            <div class="form-group">
              <label for="hobi"><b>Hobi Siswa :</b></label>
              <input type="text" class="form-control" id="hobi" name="hobi" required>
            </div>

            <div class="form-group">
              <label for="citacita"><b>Cita - Cita Siswa :</b></label>
              <input type="text" class="form-control" id="citacita" name="citacita" required>
            </div>

            <div class="form-group">
              <label for="imunisasi"><b>Imunisasi Yang Sudah Pernah :</b></label>
              <input type="text" class="form-control" id="imunisasi" name="imunisasi" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nama Ayah Kandung : </b></label>
              <input type="text" class="form-control" id="nama_ayah_kandung" name="nama_ayah_kandung" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Tempat Kelahiran :</b></label>
              <input type="text" class="form-control" id="tempat_lahir_ayah" name="tempat_lahir_ayah" required>
            </div>


            <div class="form-group">
              <label for="nama"><b>Tanggal Lahir :</b></label>
              <input type="date" class="form-control" id="tgl_lahir_ayah" name="tgl_lahir_ayah" required>
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
              <input type="text" class="form-control" id="nama_ayah_kandung" name="nama_ayah_kandung" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Tempat Kelahiran :</b></label>
              <input type="text" class="form-control" id="tempat_lahir_ayah" name="tempat_lahir_ayah" required>
            </div>


            <div class="form-group">
              <label for="nama"><b>Tanggal Lahir :</b></label>
              <input type="date" class="form-control" id="tgl_lahir_ayah" name="tgl_lahir_ayah" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nik Ayah Kandung :</b></label>
              <input type="text" class="form-control" id="no_nik_ayah" name="no_nik_ayah" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nama Ibu Kandung Ayah :</b></label>
              <input type="text" class="form-control" id="nama_ibu_ayah" name="nama_ibu_ayah" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nama Ibu Kandung Ayah :</b></label>
              <input type="text" class="form-control" id="nama_ibu_ayah" name="nama_ibu_ayah" required>
            </div>

            
            <div class="form-group">
              <label><b>Status Ayah :</b></label>
              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="status_ayah" id="hidup" value="hidup" required>
                <label class="form-check-label" for="hidup">
                  Hidup
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="status_ayah" id="mati" value="mati" required>
                <label class="form-check-label" for="mati">
                  Mati
                </label>
              </div>

            </div>

            <div class="form-group">
              <label for="nama"><b>Pendidikan Ayah :</b></label>
              <input type="text" class="form-control" id="pendidikan_ayah" name="pendidikan_ayah" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Pekerjaan Ayah :</b></label>
              <input type="text" class="form-control" id="pendidikan_ayah" name="pendidikan_ayah" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Penghasilan Ayah Perbulan :</b></label>
              <input type="number" class="form-control" id="pendidikan_ayah" name="pendidikan_ayah" required>
            </div>


            
            <div class="form-group">
              <label><b>Domisili Tempat Tinggal :</b></label>
              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="domisili_tempat_ayah" id="dalamkota" value="dalamkota" required>
                <label class="form-check-label" for="dalamkota">
                  Dalam Kota
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="domisili_tempat_ayah" id="luarkota" value="luarkota" required>
                <label class="form-check-label" for="luarkota">
                  Luar Kota
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="domisili_tempat_ayah" id="luarnegeri" value="luarnegeri" required>
                <label class="form-check-label" for="luarnegeri">
                  Luar Negeri
                </label>
              </div>

            </div>

            <div class="form-group">
              <label><b>Status Tempat Tinggal :</b></label>
              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="status_tempat_ayah" id="rumahsendiri" value="rumahsendiri" required>
                <label class="form-check-label" for="rumahsendiri">
                  Rumah Sendiri
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="status_tempat_ayah" id="rumahorangtua" value="rumahorangtua" required>
                <label class="form-check-label" for="rumahorangtua">
                  Rumah Orang Tua
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="status_tempat_ayah" id="kontrakan" value="kontrakan" required>
                <label class="form-check-label" for="kontrakan">
                  Kontrakan
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="status_tempat_ayah" id="apartemen" value="apartemen" required>
                <label class="form-check-label" for="apartemen">
                  Apartemen
                </label>
              </div>

            </div>

            <div class="form-group">
              <label for="nama"><b>Alamat Rumah Ayah :</b></label>
              <input type="text" class="form-control" id="alamat_rumah_ayah" name="alamat_rumah_ayah" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Handphone ayah :</b></label>
              <input type="number" class="form-control" id="no_hp_ayah" name="no_hp_ayah" required>
            </div>


            <h3 style="margin-top: 5%">Data Ibu</h3>

            <div class="form-group">
              <label for="nama"><b>Nama ibu Kandung : </b></label>
              <input type="text" class="form-control" id="nama_ibu_kandung" name="nama_ibu_kandung" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Tempat Kelahiran :</b></label>
              <input type="text" class="form-control" id="tempat_lahir_ibu" name="tempat_lahir_ibu" required>
            </div>


            <div class="form-group">
              <label for="nama"><b>Tanggal Lahir :</b></label>
              <input type="date" class="form-control" id="tgl_lahir_ibu" name="tgl_lahir_ibu" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nik ibu Kandung :</b></label>
              <input type="text" class="form-control" id="no_nik_ibu" name="no_nik_ibu" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nama Ibu Kandung ibu :</b></label>
              <input type="text" class="form-control" id="nama_ibu_ibu" name="nama_ibu_ibu" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nama Ibu Kandung ibu :</b></label>
              <input type="text" class="form-control" id="nama_ibu_ibu" name="nama_ibu_ibu" required>
            </div>

            
            <div class="form-group">
              <label><b>Status ibu :</b></label>
              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="status_ibu" id="hidup" value="hidup" required>
                <label class="form-check-label" for="hidup">
                  Hidup
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="status_ibu" id="mati" value="mati" required>
                <label class="form-check-label" for="mati">
                  Mati
                </label>
              </div>

            </div>

            <div class="form-group">
              <label for="nama"><b>Pendidikan ibu :</b></label>
              <input type="text" class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Pekerjaan ibu :</b></label>
              <input type="text" class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Penghasilan ibu Perbulan :</b></label>
              <input type="number" class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" required>
            </div>


            
            <div class="form-group">
              <label><b>Domisili Tempat Tinggal :</b></label>
              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="domisili_tempat_ibu" id="dalamkota" value="dalamkota" required>
                <label class="form-check-label" for="dalamkota">
                  Dalam Kota
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="domisili_tempat_ibu" id="luarkota" value="luarkota" required>
                <label class="form-check-label" for="luarkota">
                  Luar Kota
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="domisili_tempat_ibu" id="luarnegeri" value="luarnegeri" required>
                <label class="form-check-label" for="luarnegeri">
                  Luar Negeri
                </label>
              </div>

            </div>

            <div class="form-group">
              <label><b>Status Tempat Tinggal :</b></label>
              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="status_tempat_ibu" id="rumahsendiri" value="rumahsendiri" required>
                <label class="form-check-label" for="rumahsendiri">
                  Rumah Sendiri
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="status_tempat_ibu" id="rumahorangtua" value="rumahorangtua" required>
                <label class="form-check-label" for="rumahorangtua">
                  Rumah Orang Tua
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="status_tempat_ibu" id="kontrakan" value="kontrakan" required>
                <label class="form-check-label" for="kontrakan">
                  Kontrakan
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="status_tempat_ibu" id="apartemen" value="apartemen" required>
                <label class="form-check-label" for="apartemen">
                  Apartemen
                </label>
              </div>

            </div>

            <div class="form-group">
              <label for="nama"><b>Alamat Rumah ibu :</b></label>
              <input type="text" class="form-control" id="alamat_rumah_ibu" name="alamat_rumah_ibu" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Handphone ibu :</b></label>
              <input type="number" class="form-control" id="no_hp_ibu" name="no_hp_ibu" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Bantuan Yang Diterima Dari Pemerintah :</b></label>
              <input type="text" class="form-control" id="bantuan_pemerintah" name="bantuan_pemerintah" required>
            </div>

            
            <div class="form-group">
              <label for="nama"><b>Nomor KIP :</b></label>
              <input type="text" class="form-control" id="no_kip" name="no_kip" required>
            </div>

               
            <div class="form-group">
              <label for="nama"><b>Nomor Kartu Keluarga KIP :</b></label>
              <input type="text" class="form-control" id="no_kk_kip" name="no_kk_kip" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nama Kartu Keluarga KIP :</b></label>
              <input type="text" class="form-control" id="nama_kepala_kip" name="nama_kepala_kip" required>
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
              <label for="nama"><b>Nama wali Kandung : </b></label>
              <input type="text" class="form-control" id="nama_wali_kandung" name="nama_wali_kandung" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Tempat Kelahiran :</b></label>
              <input type="text" class="form-control" id="tempat_lahir_wali" name="tempat_lahir_wali" required>
            </div>


            <div class="form-group">
              <label for="nama"><b>Tanggal Lahir :</b></label>
              <input type="date" class="form-control" id="tgl_lahir_wali" name="tgl_lahir_wali" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nik wali Kandung :</b></label>
              <input type="text" class="form-control" id="no_nik_wali" name="no_nik_wali" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nama Ibu Kandung wali :</b></label>
              <input type="text" class="form-control" id="nama_ibu_wali" name="nama_ibu_wali" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nama Ibu Kandung wali :</b></label>
              <input type="text" class="form-control" id="nama_ibu_wali" name="nama_ibu_wali" required>
            </div>

            
            <div class="form-group">
              <label><b>Status wali :</b></label>
              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="status_wali" id="hidup" value="hidup" required>
                <label class="form-check-label" for="hidup">
                  Hidup
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="status_wali" id="mati" value="mati" required>
                <label class="form-check-label" for="mati">
                  Mati
                </label>
              </div>

            </div>

            <div class="form-group">
              <label for="nama"><b>Pendidikan wali :</b></label>
              <input type="text" class="form-control" id="pendidikan_wali" name="pendidikan_wali" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Pekerjaan wali :</b></label>
              <input type="text" class="form-control" id="pendidikan_wali" name="pendidikan_wali" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Penghasilan wali Perbulan :</b></label>
              <input type="number" class="form-control" id="pendidikan_wali" name="pendidikan_wali" required>
            </div>


            
            <div class="form-group">
              <label><b>Domisili Tempat Tinggal :</b></label>
              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="domisili_tempat_wali" id="dalamkota" value="dalamkota" required>
                <label class="form-check-label" for="dalamkota">
                  Dalam Kota
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="domisili_tempat_wali" id="luarkota" value="luarkota" required>
                <label class="form-check-label" for="luarkota">
                  Luar Kota
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="domisili_tempat_wali" id="luarnegeri" value="luarnegeri" required>
                <label class="form-check-label" for="luarnegeri">
                  Luar Negeri
                </label>
              </div>

            </div>

            <div class="form-group">
              <label><b>Status Tempat Tinggal :</b></label>
              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="status_tempat_wali" id="rumahsendiri" value="rumahsendiri" required>
                <label class="form-check-label" for="rumahsendiri">
                  Rumah Sendiri
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="status_tempat_wali" id="rumahorangtua" value="rumahorangtua" required>
                <label class="form-check-label" for="rumahorangtua">
                  Rumah Orang Tua
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="status_tempat_wali" id="kontrakan" value="kontrakan" required>
                <label class="form-check-label" for="kontrakan">
                  Kontrakan
                </label>
              </div>

              <div class="form-check" style=" display: inline-block; margin-right: 10px;">
                <input class="form-check-input" type="radio" name="status_tempat_wali" id="apartemen" value="apartemen" required>
                <label class="form-check-label" for="apartemen">
                  Apartemen
                </label>
              </div>

            </div>

            <div class="form-group">
              <label for="nama"><b>Alamat Rumah wali :</b></label>
              <input type="text" class="form-control" id="alamat_rumah_wali" name="alamat_rumah_wali" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Handphone Wali :</b></label>
              <input type="number" class="form-control" id="no_hp_wali" name="no_hp_wali" required>
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
              <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nama Asal Sekolah :</b></label>
              <input type="text" class="form-control" id="nama_asal_sekolah" name="nama_asal_sekolah" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Alamat Sekolah Asal  :</b></label>
              <input type="text" class="form-control" id="alamat_sekolah_asal" name="alamat_sekolah_asal" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Ijazah Yang Diterima  :</b></label>
              <input type="text" class="form-control" id="ijazah_yang_diterima" name="ijazah_yang_diterima" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Tahun Lulus  :</b></label>
              <input type="date" class="form-control" id="tahun_lulus_ijazah" name="tahun_lulus_ijazah" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nomor Ijazah :</b></label>
              <input type="text" class="form-control" id="no_ijazah" name="no_ijazah" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Sertifikat Ujian / UM  :</b></label>
              <input type="text" class="form-control" id="sertifikat_ujian" name="sertifikat_ujian" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Tahun Lulus  :</b></label>
              <input type="date" class="form-control" id="tahun_lulus_ujian" name="tahun_lulus_ujian" required>
            </div>

            
            <div class="form-group">
              <label for="nama"><b>Nomor Sertifikat Ujian / SHUN :</b></label>
              <input type="number" class="form-control" id="no_sertifikatujian_shun" name="no_sertifikatujian_shun" required>
            </div>

                 
            <div class="form-group">
              <label for="nama"><b>Nomor Peserta UN :</b></label>
              <input type="number" class="form-control" id="no_peserta_un" name="no_peserta_un" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nilai Rata Rata Ijazah :</b></label>
              <input type="number" class="form-control" id="nilai_ratarata_ijazah" name="nilai_ratarata_ijazah" required>
            </div>

            
            <div class="form-group">
              <label for="nama"><b>Nilai Rata Rata um :</b></label>
              <input type="number" class="form-control" id="nilai_ratarata_um" name="nilai_ratarata_um" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nomor Induk Sekolah Asal :</b></label>
              <input type="number" class="form-control" id="no_induk_sekolah_asal" name="no_induk_sekolah_asal" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>Nomor Statistik Madrasah :</b></label>
              <input type="number" class="form-control" id="no_statistik_madrasah" name="no_statistik_madrasah" required>
            </div>

            <div class="form-group">
              <label for="nama"><b>NPSN Sekolah Asal :</b></label>
              <input type="number" class="form-control" id="npsn_sekolah_asal" name="npsn_sekolah_asal" required>
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
            <h2>PEMBAYARAN YANG DIKEHENDAKI ORANG TUA / WALI PESETA DIDIK</h2>
            <p></p>
          </div>          

          <div class="form-group">
            <label><b>Pilih Pembayaran :</b></label>
            <div class="form-check" style=" display: inline-block; margin-right: 10px;">
              <input class="form-check-input" type="radio" name="type_pembayaran" id="tunai" value="tunai" required>
              <label class="form-check-label" for="tunai">
                Tunai
              </label>
            </div>

            <div class="form-check" style=" display: inline-block; margin-right: 10px;">
              <input class="form-check-input" type="radio" name="type_pembayaran" id="angsuran" value="angsuran" required>
              <label class="form-check-label" for="angsuran">
                Angsuran
              </label>
            </div>

          </div>

          <div class="form-group">
            <label for="nama"><b>Masukan Jumlah Pembayaran Tunai :</b></label>
            <input type="text" class="form-control" id="jumlah_pembayaran_tunai" name="jumlah_pembayaran_tunai" required>
          </div>

          <div class="form-group">
            <label for="nama"><b>Masukan Jumlah Pembayaran Angsuran 1 :</b></label>
            <input type="text" class="form-control" id="jumlah_pembayaran_angsuran_1" name="jumlah_pembayaran_angsuran_1" required>
          </div>

          <div class="form-group">
            <label for="nama"><b>Masukan Jumlah Pembayaran Angsuran 2 :</b></label>
            <input type="text" class="form-control" id="jumlah_pembayaran_angsuran_2" name="jumlah_pembayaran_angsuran_2" required>
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
            <input type="text" class="form-control" id="nama_pembiayai" name="nama_pembiayai" required>
          </div>


          <div class="form-group">
            <label><b>Hubungan :</b></label>
            <div class="form-check" style=" display: inline-block; margin-right: 10px;">
              <input class="form-check-input" type="radio" name="hubungan" id="orangtuakandung/tiri/angkat" value="orangtuakandung/tiri/angkat" required>
              <label class="form-check-label" for="orangtuakandung/tiri/angkat">
                Orang Tua Kandung / Tiri / Angkat
              </label>
            </div>

            <div class="form-check" style=" display: inline-block; margin-right: 10px;">
              <input class="form-check-input" type="radio" name="hubungan" id="paman/bibi/dariayah/ibukandung" value="paman/bibi/dariayah/ibukandung" required>
              <label class="form-check-label" for="paman/bibi/dariayah/ibukandung">
                Paman / Bibi Dari Ayah / Ibu Kandung
              </label>
            </div>

            
            <div class="form-check" style=" display: inline-block; margin-right: 10px;">
              <input class="form-check-input" type="radio" name="hubungan" id="saudarakandung/tiri/angkat" value="saudarakandung/tiri/angkat" required>
              <label class="form-check-label" for="saudarakandung/tiri/angkat">
                Saudara Kandung / Tiri / Angkat
              </label>
            </div>

            <div class="form-check" style=" display: inline-block; margin-right: 10px;">
              <input class="form-check-input" type="radio" name="hubungan" id="kakek/nenek" value="kakek/nenek" required>
              <label class="form-check-label" for="kakek/nenek">
                Kakek / Nenek
              </label>
            </div>

          </div>

          <div class="form-group">
            <label for="nama"><b>Nomor Handphone :</b></label>
            <input type="text" class="form-control" id="no_hp_pembiayai" name="no_hp_pembiayai" required>
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
            <label><b>Dikelas :</b></label>
            
            <div class="form-check" style=" display: inline-block; margin-right: 10px;">
              <input class="form-check-input" type="radio" name="diterima_dikelas" id="x(sepuluh)" value="x(sepuluh)" required>
              <label class="form-check-label" for="x(sepuluh)">
               X (Sepuluh)
              </label>
            </div>

            <div class="form-check" style=" display: inline-block; margin-right: 10px;">
              <input class="form-check-input" type="radio" name="diterima_dikelas" id="xi(sebelas)" value="xi(sebelas)" required>
              <label class="form-check-label" for="xi(sebelas)">
               XI (Sebelas)
              </label>
            </div>

          </div>

          
          <div class="form-group">
            <label><b>Semester :</b></label>
            
            <div class="form-check" style=" display: inline-block; margin-right: 10px;">
              <input class="form-check-input" type="radio" name="diterima_semester" id="ganjil" value="ganjil" required>
              <label class="form-check-label" for="ganjil">
              Ganjil
              </label>
            </div>

            <div class="form-check" style=" display: inline-block; margin-right: 10px;">
              <input class="form-check-input" type="radio" name="diterima_semester" id="genap" value="genap" required>
              <label class="form-check-label" for="genap">
              Genap
              </label>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>

  <button type="submit" style="background:#4fa376; color:white" class="btn btn-coklat btn-user btn-block"> Send Data </button>

</form>
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Reveal</strong>. All Rights Reserved
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
  <script src="assets/lib/jquery/jquery.min.js"></script>
  <script src="assets/lib/jquery/jquery-migrate.min.js"></script>
  <script src="assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/lib/easing/easing.min.js"></script>
  <script src="assets/lib/superfish/hoverIntent.js"></script>
  <script src="assets/lib/superfish/superfish.min.js"></script>
  <script src="assets/lib/wow/wow.min.js"></script>
  <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="assets/lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="assets/lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="assets/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="assets/js/main.js"></script>

</body>
</html>
