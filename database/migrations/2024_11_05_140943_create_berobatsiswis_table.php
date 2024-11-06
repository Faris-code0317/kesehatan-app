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
        Schema::create('berobatsiswis', function (Blueprint $table) {
            $table->id();
     $table->string('nama_lengkap');
            $table->string('kelas');
            $table->string('wali_kelas');
            $table->text('keluhan');
            $table->string('status_pengobatan');
            $table->string('nama_dokter');
            $table->date('tanggal_sakit');
            $table->date('tanggal_berobat');
            $table->integer('jumlah_kunjungan');
            $table->string('nama_obat');
            $table->text('catatan_dokter');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('berobatsiswis');
    }
};

