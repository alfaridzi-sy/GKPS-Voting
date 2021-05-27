<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->bigIncrements('id_detail_voting');
            $table->unsignedBigInteger('id_sesi');
            $table->foreign('id_sesi')->references('id_sesi')->on('sessions')->onDelete('cascade');
            $table->unsignedBigInteger('id_klien');
            $table->foreign('id_klien')->references('id_klien')->on('clients')->onDelete('cascade');
            $table->unsignedBigInteger('id_kandidat');
            $table->foreign('id_kandidat')->references('id_kandidat')->on('candidates')->onDelete('cascade');
            $table->timestamp('datetime');
            $table->string('user_agent', 32)->default('Android Apps');
            $table->boolean('status_email');
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
        Schema::dropIfExists('votes');
    }
}
