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
        Schema::table('detail_users', function (Blueprint $table) {
            //
            $table->string('tempat_lahir')->after('nrp');

            $table->date('tanggal_lahir')->after('tempat_lahir')->nullable();
            $table->string('jenis_kelamin')->after('tanggal_lahir');
            $table->string('pangkat')->after('jenis_kelamin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_user', function (Blueprint $table) {
            //
        });
    }
};
