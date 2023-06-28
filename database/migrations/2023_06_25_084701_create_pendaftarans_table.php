<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->bigIncrements('id');
$table->string('nama', 100);
$table->string('nisn', 100);
$table->string('no_kk', 100);
$table->string('no_nik', 100);
$table->text('tempat_lahir');
$table->date('tgl_lahir');
$table->string('jenis_kelamin', 10);
$table->string('golongan_darah', 5);
$table->integer('anak_ke');
$table->integer('anak_ke_dari');
$table->integer('saudara_tiri');
$table->integer('saudara_kandung');
$table->string('status_dalam_keluarga', 50);
$table->string('tinggal_dengan', 50);
$table->string('alamat_lengkap', 100);
$table->string('handphone', 20);
$table->string('koordinat_rumah', 50);
$table->string('jaraktempuh', 50);
$table->string('waktutempuh', 50);
$table->string('transportasi', 50);
$table->string('hobi', 100);
$table->string('citacita', 100);
$table->string('imunisasi', 50);
$table->string('nama_ayah_kandung', 100);
$table->string('tempat_lahir_ayah', 100);
$table->date('tgl_lahir_ayah');
$table->string('no_nik_ayah', 50);
$table->string('nama_ibu_ayah', 100);
$table->string('status_ayah', 50);
$table->string('pendidikan_ayah', 50);
$table->string('domisili_tempat_ayah', 100);
$table->string('status_tempat_ayah', 50);
$table->string('alamat_rumah_ayah', 100);
$table->string('no_hp_ayah', 20);
$table->string('nama_ibu_kandung', 100);
$table->string('tempat_lahir_ibu', 100);
$table->date('tgl_lahir_ibu');
$table->string('no_nik_ibu', 50);
$table->string('nama_ibu_ibu', 100);
$table->string('status_ibu', 50);
$table->string('pendidikan_ibu', 50);
$table->string('domisili_tempat_ibu', 100);
$table->string('status_tempat_ibu', 50);
$table->string('alamat_rumah_ibu', 100);
$table->string('no_hp_ibu', 20);
$table->string('bantuan_pemerintah', 50);
$table->string('no_kip', 50);
$table->string('no_kk_kip', 50);
$table->string('nama_kepala_kip', 100);
$table->string('nama_wali_kandung', 100);
$table->string('tempat_lahir_wali', 100);
$table->date('tgl_lahir_wali');
$table->string('no_nik_wali', 50);
$table->string('nama_ibu_wali', 100);
$table->string('status_wali', 50);
$table->string('pendidikan_wali', 50);
$table->string('domisili_tempat_wali', 100);
$table->string('status_tempat_wali', 50);
$table->string('alamat_rumah_wali', 100);
$table->string('no_hp_wali', 20);
$table->string('asal_sekolah', 100);
$table->string('nama_asal_sekolah', 100);
$table->string('alamat_sekolah_asal', 100);
$table->string('ijazah_yang_diterima', 50);
$table->date('tahun_lulus_ijazah');
$table->string('no_ijazah', 50);
$table->string('sertifikat_ujian', 50);
$table->date('tahun_lulus_ujian');
$table->string('no_sertifikatujian_shun', 50);
$table->string('no_peserta_un', 50);
$table->integer('nilai_ratarata_ijazah');
$table->integer('nilai_ratarata_um');
$table->string('no_induk_sekolah_asal', 50);
$table->string('no_statistik_madrasah', 50);
$table->string('npsn_sekolah_asal', 50);
// $table->string('type_pembayaran', 50);
// $table->integer('jumlah_pembayaran_tunai');
// $table->integer('jumlah_pembayaran_angsuran_1');
// $table->integer('jumlah_pembayaran_angsuran_2');
$table->string('nama_pembiayai', 100);
$table->string('hubungan', 50);
$table->string('no_hp_pembiayai', 20);
$table->string('diterima_dikelas', 50);
$table->string('diterima_semester', 50);
$table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftarans');
    }
}
