<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbKehadiranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kehadiran', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Nim');
            $table->bigInteger('id_anggota');
            $table->date('tanggal');
            // $table->time('jamabsen')->nullable();
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
        Schema::dropIfExists('tb_kehadiran');
    }
}

