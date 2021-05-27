<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id_klien');
            $table->string('gelar_depan', 32)->nullable()->default("");
            $table->string('nama_lengkap', 32)->nullable();
            $table->string('gelar_belakang', 32)->nullable()->default("");
            $table->string('email_klien', 64)->nullable();
            $table->string('foto')->nullable();
            $table->string('password')->nullable();
            $table->string('instansi', 64)->nullable();
            $table->string('sektor', 64)->nullable();
            $table->string('wa', 15)->nullable();
            $table->timestamp('waktu_pendaftaran');
            $table->string('user_agent', 32)->default('Web Panel');
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
        Schema::dropIfExists('clients');
    }
}
