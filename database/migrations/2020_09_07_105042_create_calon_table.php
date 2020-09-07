<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calon', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('nama')->nullable();
            $table->string('email')->nullable();
            $table->string('tempat_tanggal_lahir')->nullable();
            $table->string('status')->nullable();
            $table->string('agama')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('nohp')->nullable();
            $table->string('golongan_darah')->nullable();
            $table->string('no_orang_terdekat')->nullable();
            $table->string('alamat')->nullable();
            $table->string('posisi_yang_dilamar')->nullable();
            $table->string('pendidikan_terakhir')->nullable();
            $table->string('nama_institusi')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('tahun_lulus')->nullable();
            $table->string('nama_kursus')->nullable();
            $table->string('sertifikat')->nullable();
            $table->string('tahun')->nullable();
            $table->string('nama_perusahaan')->nullable();
            $table->string('posisi_terakhir')->nullable();
            $table->string('pendapatan_terakhir')->nullable();
            $table->string('tahun_selesai')->nullable();
            $table->string('avatar')->nullable();
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
        Schema::dropIfExists('calon');
    }
}
