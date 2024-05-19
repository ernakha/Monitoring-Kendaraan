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
        Schema::create('pesan', function (Blueprint $table) {
            $table->id();
            $table->string('pengguna');
            $table->unsignedBigInteger('kendaraan_id'); 
            $table->foreign('kendaraan_id')->references('id')->on('kendaraan')->onDelete('cascade');
            $table->unsignedBigInteger('pengemudi_id'); 
            $table->foreign('pengemudi_id')->references('id')->on('pengemudi')->onDelete('cascade');
            $table->string('lokasi');
            $table->time('waktu');
            $table->string('status')->default('Proses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesans');
    }
};
