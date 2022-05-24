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
