<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_anggota', function (Blueprint $table) {
            $table->id();
            $table->text('nama');
            $table->integer('nim');
            $table->string('kelas');
            $table->text('divisi');
            $table->text('study_group');
            $table->string('email');
            $table->string('password');
            $table->string('status')->default('Pending');
            $table->string('akses')->default('non_admin');
            
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
        Schema::dropIfExists('tb_anggota');
    }
}
