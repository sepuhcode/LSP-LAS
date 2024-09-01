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
        Schema::create('sertifikasis', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('no_sertifikat')->nullable();
            $table->string('no_reg_sertifikat')->nullable();
            $table->foreignId('skema_sertifikasi_id')->nullable();
            $table->foreignId('posisi_las_id')->nullable();
            $table->string('tuk')->nullable();
            $table->string('no_blangko')->nullable();
            $table->string('tgl_uji')->nullable();
            $table->date('tgl_sertifikat')->nullable();
            $table->foreignId('asesor_id')->nullable();
            $table->foreignId('owner_id')->nullable();
            // $table->foreignId('user_id')->nullable();
            $table->string('file_scan_sertifikat')->nullable();
            // $table->string('no_skema')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sertifikasis');
    }
};
