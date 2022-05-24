<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuangKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruang_kelas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('jenis_ruang',100);
            $table->string('panjang',100);
            $table->string('lebar',100);
            $table->string('kondisi',100);
            $table->string('tingkat_rusak',100);
            $table->string('rehab_akhir',100);
            $table->string('meja_baik',100);
            $table->string('meja_rusak',100);
            $table->string('kursi_baik',100);
            $table->string('kursi_rusak',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ruang_kelas');
    }
}
