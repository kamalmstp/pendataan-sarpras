<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuangPenunjangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruang_penunjangs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('jenis_ruang',150);
            $table->string('keterangan',150);
            $table->string('panjang',100);
            $table->string('lebar',100);
            $table->string('kondisi',200);
        });
        Schema::create('peralatan', function (Blueprint $table) {
            $table->id();
            // $table->timestamps();
            $table->string('nama_peralatan',150);
            $table->integer('jumlah');
            $table->integer('tahun_peroleh');
            $table->string('sumber_dana',200);
            $table->string('kondisi',200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ruang_penunjangs');
    }
}
