<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekolah', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sekolah', 100);
            $table->string('alamat',400);
            $table->string('kecamatan',100);
            $table->string('nama_kepsek', 100);
            $table->integer('no_sekolah_kepsek');
            $table->string('akredetasi', 30);
            $table->integer('no_akredetasi');
            $table->integer('npsn');
            $table->integer('nss');
            $table->integer('luas_tanah');
            $table->integer('luas_bangunan');
            $table->string('status', 100);
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
        Schema::dropIfExists('sekolah');
    }
}
