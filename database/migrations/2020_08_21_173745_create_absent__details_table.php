<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absent__details', function (Blueprint $table) {
            $table->bigIncrements('id_detail_absensi');
            $table->unsignedBigInteger('id_sesi');
            $table->foreign('id_sesi')->references('id_sesi')->on('sessions')->onDelete('cascade');
            $table->unsignedBigInteger('id_klien');
            $table->foreign('id_klien')->references('id_klien')->on('clients')->onDelete('cascade');
            $table->timestamp('waktu_absensi');
            $table->string('kehadiran');
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
        Schema::dropIfExists('absent__details');
    }
}
