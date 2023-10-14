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
        Schema::create('old_data', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('no_sertifikat')->nullable();
            $table->string('no_reg_sertifikat')->nullable();
            $table->string('skema_sertifikasi')->nullable();
            $table->string('posisi_las')->nullable();
            $table->string('tuk')->nullable();
            $table->string('no_blangko')->nullable();
            $table->string('tgl_uji')->nullable();
            $table->string('tgl_sertifikat')->nullable();
            $table->string('asesor')->nullable();
            $table->string('no_skema')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('old_data');
    }
};
