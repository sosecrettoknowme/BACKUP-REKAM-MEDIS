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
        Schema::create('rekams', function (Blueprint $table) {
            $table->id();
            $table->string('kd_rm');
            $table->string('tgl_periksa');
            $table->foreignId('pasien_id');
            $table->string('keluhan');
            $table->foreignId('dokter_id');
            $table->string('diagnosa');
            $table->foreignId('obat_id');
            $table->foreignId('ruang_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekams');
    }
};
