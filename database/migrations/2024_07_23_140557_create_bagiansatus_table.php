<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bagiansatus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('no_ktp');
            $table->string('tempat_tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('kebangsaan');
            $table->text('alamat_rumah');
            $table->string('kode_pos');
            $table->string('no_rumah');
            $table->string('no_hp');
            $table->string('no_kantor');
            $table->string('email');
            $table->string('kualifikasi_pendidikan');
            $table->string('nama_institusi');
            $table->string('jabatan');
            $table->string('alamat_kantor');
            $table->string('kode_pos_kantor');
            $table->string('no_telp');
            $table->string('fax');
            $table->string('email_kantor');

            $table->string('judul');
            $table->string('nomor');
            $table->text('tujuan_asesmen');


            $table->string('kode_unit');
            $table->string('judul_unit');
            $table->text('standar_kompetensi_kerja');

            $table->boolean('memenuhi_syarat')->nullable();
            $table->boolean('tidak_memenuhi_syarat')->nullable();
            $table->string('tidakada')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bagiansatus');
    }
};