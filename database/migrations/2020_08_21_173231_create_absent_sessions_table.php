<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsentSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absent_sessions', function (Blueprint $table) {
            $table->bigIncrements('id_sesi_absen');
            $table->unsignedBigInteger('id_sesi');
            $table->foreign('id_sesi')->references('id_sesi')->on('sessions')->onDelete('cascade');
            $table->integer('durasi');
            $table->boolean('status_absen');
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
        Schema::dropIfExists('absent_sessions');
    }
}
