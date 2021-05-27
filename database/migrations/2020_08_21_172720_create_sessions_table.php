<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->bigIncrements('id_sesi');
            $table->string('kode_sesi', 10);
            $table->string('keterangan_sesi', 64);
            $table->boolean('status')->default(true);
            $table->unsignedBigInteger('id_pemilihan');
            $table->foreign('id_pemilihan')->references('id_pemilihan')->on('selection_types')->onDelete('cascade');
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
        Schema::dropIfExists('sessions');
    }
}
