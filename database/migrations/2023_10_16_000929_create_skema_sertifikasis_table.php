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
        Schema::create('skema_sertifikasis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('no_skema');
            $table->text('deskripsi');
            $table->timestamps();
            $table->softDeletes();
        });
    }


   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skema_sertifikasis');
    }
};
