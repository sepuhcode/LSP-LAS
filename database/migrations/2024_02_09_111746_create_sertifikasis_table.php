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
            $table->string('nama')->nullable();
            $table->string('no_sertifikat')->nullable();
            $table->string('no_reg_sertifikat')->nullable();
            $table->foreignId('skema_sertifikasi')->nullable();
            $table->foreignId('posisi_las')->nullable();
            $table->string('tuk')->nullable();
            $table->string('no_blangko')->nullable();
            $table->string('tgl_uji')->nullable();
            $table->date('tgl_sertifikat')->nullable();
            $table->foreignId('user_id')->nullable();
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
