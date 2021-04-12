<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbRapatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_rapat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_rapat');
            $table->integer('pemohon');
            $table->date('tgl_rapat');
            $table->time('jam_rapat');
            $table->string('link');
            $table->string('status_aproval')->default('waiting');
            $table->string('jenis_kegiatan')->default('rapat');
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
        Schema::dropIfExists('tb_rapat');
    }
}
