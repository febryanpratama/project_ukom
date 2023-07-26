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
        Schema::create('detail_users', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('satwil_id');
            $table->integer('satker_id');
            $table->string('nama_lengkap');
            $table->bigInteger('nrp');
            $table->string('path_foto');
            $table->enum('tipe', ['PPK', 'POKJA']);
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
        Schema::dropIfExists('detail_users');
    }
};
