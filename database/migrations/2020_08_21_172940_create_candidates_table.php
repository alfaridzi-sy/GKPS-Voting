<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->bigIncrements('id_kandidat');
            $table->unsignedBigInteger('id_sesi');
            $table->foreign('id_sesi')->references('id_sesi')->on('sessions')->onDelete('cascade');
            $table->string('nama_kandidat', 64);
            $table->integer('nomor_kandidat');
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
        Schema::dropIfExists('candidates');
    }
}
