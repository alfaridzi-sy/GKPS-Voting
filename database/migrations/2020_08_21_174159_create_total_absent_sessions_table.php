<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTotalAbsentSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('total_absent_sessions', function (Blueprint $table) {
            $table->bigIncrements('id_jumlah_sesi_absen');
            $table->unsignedBigInteger('id_sesi');
            $table->foreign('id_sesi')->references('id_sesi')->on('sessions')->onDelete('cascade');
            $table->integer('jumlah_absen_apps');
            $table->integer('jumlah_absen_web');
            $table->integer('jumlah_total_absen');
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
        Schema::dropIfExists('total_absent_sessions');
    }
}
