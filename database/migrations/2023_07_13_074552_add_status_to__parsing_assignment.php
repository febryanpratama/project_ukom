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
        Schema::table('parsing_assignments', function (Blueprint $table) {
            //
            $table->enum('status', ['Diterima', 'Ditolak', 'Diproses'])->default('Diproses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sparsing_assignments', function (Blueprint $table) {
            //
        });
    }
};
