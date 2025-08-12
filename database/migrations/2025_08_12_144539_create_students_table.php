<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps(); // created_at, updated_at
            $table->string('created_by');
            $table->string('updated_by')->nullable();

            $table->string('nis');
            $table->string('nama')->nullable();
            $table->string('gender')->nullable();
            $table->string('nikah')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('umur')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->string('bahasa')->nullable();
            $table->string('domisili')->nullable();
            $table->string('nomor')->nullable();
            $table->string('email')->nullable();

            $table->integer('tinggi_badan')->nullable();
            $table->integer('berat_badan')->nullable();
            $table->integer('ukuran_sepatu')->nullable();

            $table->string('agama')->nullable();
            $table->text('kelebihan')->nullable();
            $table->text('kekurangan')->nullable();
            $table->string('promosi')->nullable();
            $table->string('tinggal_jp')->nullable();
            $table->string('keterangan_tinggal_jp')->nullable();

            $table->string('nama_sekolah');
            $table->integer('tahun_masuksekolah');
            $table->string('bulan__masuksekolah');
            $table->string('status_sekolah');

            $table->string('nama_perusahaan')->nullable();
            $table->integer('tahun_masukaperusahaan')->nullable();
            $table->string('bulan_masukaperusahaan')->nullable();
            $table->string('status');

            $table->string('nama_certif')->nullable();
            $table->integer('tahun')->nullable();
            $table->string('bulan')->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
