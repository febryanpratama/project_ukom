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
        Schema::create('portofolios', function (Blueprint $table) {
            $table->id();
            $table->integer('dokumen_id');
            $table->integer('user_id');
            $table->string('bukti_dukung_portofolio')->nullable();
            $table->string('kep_penugasan')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('path_portofolio')->nullable();
            $table->enum('status', ['Disetujui', 'Ditolak', 'Revisi', 'Direview'])->default('Direview');
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
        Schema::dropIfExists('portofolios');
    }
};
