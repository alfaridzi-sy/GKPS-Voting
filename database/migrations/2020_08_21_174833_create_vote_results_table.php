<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoteResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote_results', function (Blueprint $table) {
            $table->bigIncrements('id_hasil_voting');
            $table->unsignedBigInteger('id_sesi');
            $table->foreign('id_sesi')->references('id_sesi')->on('sessions')->onDelete('cascade');
            $table->unsignedBigInteger('id_kandidat');
            $table->foreign('id_kandidat')->references('id_kandidat')->on('candidates')->onDelete('cascade');
            $table->unsignedBigInteger('id_detail_voting');
            $table->foreign('id_detail_voting')->references('id_detail_voting')->on('votes')->onDelete('cascade');
            $table->integer('jumlah_suara');
            $table->integer('total_jumlah_suara');
            $table->float('persentase');
            $table->timestamp('datetime');
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
        Schema::dropIfExists('vote_results');
    }
}
