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
        Schema::create('barang_keluars', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pengamnilan');
            $table->string('jenis_kebutuhan');
            $table->string('nama_enginneer');
            $table->string('nama_mitra');
            $table->string('no_pa_ar');
            $table->string('lokasi_pemasangan');
            $table->string('jenis_barang');
            $table->integer('jumlah');
            $table->string('status_rsvp');
            $table->integer('kode_rsvp');
            $table->integer('kode_gi');
            $table->string('no_io');
            $table->string('keterangan');
            $table->foreignId('barang_id')->constrained('barangs')->onDelete('cascade');
            $table->string('plant');
            $table->string('storage_location');
            $table->string('df_stor_loc_level');
            $table->string('batch_real');
            $table->string('batch');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_keluars');
    }
};