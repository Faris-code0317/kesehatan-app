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
        Schema::create('datasakitsiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('kelas');
            $table->string('wali_kelas');
            $table->text('keluhan');
            $table->string('status_pengobatan');
            $table->date('tanggal_sakit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datasakitsiswas');
    }
};
