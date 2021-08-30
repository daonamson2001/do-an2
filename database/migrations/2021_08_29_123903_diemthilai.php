<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Diemthilai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Diemthilai', function (Blueprint $table) {
            $table->string('idSV');
            $table->string('idMH');
            $table->unsignedBigInteger('idNH');
            $table->foreign('idNH')->references('id')->on('NamHoc');
            $table->foreign('idSV')->references('idSV')->on('SinhVien');
            $table->foreign('idMH')->references('idMH')->on('MonHoc');
            $table->date('ThoiGian');
            $table->float('ThiLaiLyThuyet');
            $table->float('ThiLaiThucHanh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Diemthilai');
    }
}