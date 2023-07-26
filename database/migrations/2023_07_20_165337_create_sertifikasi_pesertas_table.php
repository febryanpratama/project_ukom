<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sertifikasi_pesertas', function (Blueprint $table) {
            $table->id();
            $table->integer('sertifikasi_id');
            $table->integer('user_id');
            $table->string('nomor_sertifikat');
            $table->string('file_sertifikat')->nullable();
            $table->enum('status', ['Terverifikasi', 'Belum Terverifikasi', 'Ditolak']);
            $table->string('catatan')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sertifikasi_pesertas');
    }
};
