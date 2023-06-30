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
            $table->string('kode_pendaftaran', 10)->unique();
            $table->string('nama', 40);
            $table->string('nisn', 20);
            $table->string('no_kk', 20);
            $table->string('no_nik', 20);
            $table->text('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('jenis_kelamin', 10);
            $table->string('golongan_darah', 2);
            $table->integer('anak_ke');
            $table->integer('anak_ke_dari');
            $table->integer('saudara_tiri');
            $table->integer('saudara_kandung');
            $table->string('status_dalam_keluarga', 10);
            $table->string('tinggal_dengan', 15);
            $table->text('alamat_lengkap');
            $table->string('handphone', 15);
            $table->text('koordinat_rumah');
            $table->string('jaraktempuh', 20);
            $table->string('waktutempuh', 20);
            $table->string('transportasi', 20);
            $table->string('hobi', 30);
            $table->string('citacita', 30);
            $table->string('imunisasi', 30);
            $table->string('nama_ayah_kandung', 30);
            $table->string('tempat_lahir_ayah', 20);
            $table->date('tgl_lahir_ayah');
            $table->string('no_nik_ayah', 20);
            $table->string('nama_ibu_ayah', 40);
            $table->string('status_ayah', 10);
            $table->string('pendidikan_ayah', 20);
            $table->string('pekerjaan_ayah', 20);
            $table->string('penghasilan_ayah', 20);
            $table->string('domisili_tempat_ayah', 20);
            $table->string('status_tempat_ayah', 20);
            $table->string('alamat_rumah_ayah', 40);
            $table->string('no_hp_ayah', 15);
            $table->string('nama_ibu_kandung', 30);
            $table->string('tempat_lahir_ibu', 20);
            $table->date('tgl_lahir_ibu');
            $table->string('no_nik_ibu', 20);
            $table->string('nama_ibu_ibu', 30);
            $table->string('status_ibu', 10);
            $table->string('pendidikan_ibu', 20);
            $table->string('pekerjaan_ibu', 20);
            $table->string('penghasilan_ibu', 20);
            $table->string('domisili_tempat_ibu', 20);
            $table->string('status_tempat_ibu', 20);
            $table->string('alamat_rumah_ibu', 40);
            $table->string('no_hp_ibu', 15);
            $table->string('bantuan_pemerintah', 30);
            $table->string('no_kip', 20);
            $table->string('no_kk_kip', 20);
            $table->string('nama_kepala_kip', 30);
            $table->string('nama_wali_kandung', 30);
            $table->string('tempat_lahir_wali', 20);
            $table->date('tgl_lahir_wali');
            $table->string('no_nik_wali', 20);
            $table->string('nama_ibu_wali', 30);
            $table->string('status_wali', 10);
            $table->string('pendidikan_wali', 30);
            $table->string('pekerjaan_wali', 20);
            $table->string('penghasilan_wali', 20);
            $table->string('domisili_tempat_wali', 20);
            $table->string('status_tempat_wali', 20);
            $table->string('alamat_rumah_wali', 40);
            $table->string('no_hp_wali', 15);
            $table->string('asal_sekolah', 30);
            $table->string('nama_asal_sekolah', 30);
            $table->string('alamat_sekolah_asal', 30);
            $table->string('ijazah_yang_diterima', 30);
            $table->date('tahun_lulus_ijazah');
            $table->string('no_ijazah', 20);
            $table->string('sertifikat_ujian', 30);
            $table->date('tahun_lulus_ujian');
            $table->string('no_sertifikatujian_shun', 30);
            $table->string('no_peserta_un', 30);
            $table->integer('nilai_ratarata_ijazah');
            $table->integer('nilai_ratarata_um');
            $table->string('no_induk_sekolah_asal', 30);
            $table->string('no_statistik_madrasah', 30);
            $table->string('npsn_sekolah_asal', 30);
            $table->string('nama_pembiayai', 30);
            $table->string('hubungan', 40);
            $table->string('no_hp_pembiayai', 15);
            $table->string('diterima_dikelas', 10);
            $table->string('diterima_semester', 10);
            $table->string('kode', 20)->nullable();
            $table->string('insider', 40);
            $table->string('outsider', 40);
            $table->string('status', 10)->nullable();
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

?>