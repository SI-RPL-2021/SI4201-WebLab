<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPelatihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pelatihan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_Pelatihan');
            $table->integer('pemohon');
            $table->string('study_group');
            $table->date('tgl_peltihan');
            $table->time('jam_pelatihan');
            $table->string('link');
            $table->string('status_aproval')->default('waiting');
            $table->string('jenis_kegiatan')->default('pelatihan');
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
        Schema::dropIfExists('tb_pelatihan');
    }
}
