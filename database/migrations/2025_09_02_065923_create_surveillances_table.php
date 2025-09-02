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
        Schema::create('surveillances', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap')->nullable();
            $table->string('email')->nullable();
            $table->string('nomor_hp')->nullable();
            $table->string('nomor_identitas')->nullable();
            $table->string('nomor_sertifikat')->nullable();
            $table->string('nomor_registrasi_sertifikat')->nullable();
            $table->integer('skema_kompetensi_id')->nullable();
            $table->integer('sumber_dana_sertifikasi_id')->nullable();
            $table->string('nama_tempat_bekerja')->nullable();
            $table->string('alamat_tempat_bekerja')->nullable();
            $table->string('jabatan_ditempat_kerja')->nullable();
            $table->string('proyek_sedang_dikerjakan')->nullable();
            $table->string('jabatan_dalam_proyek')->nullable();
            $table->string('pekerjaan_sesuai_skk')->nullable();
            $table->string('pekerjaan_sesuai_skk_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveillances');
    }
};
