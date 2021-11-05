<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Diem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Diem', function (Blueprint $table) {
            $table->string('idSV');
            $table->string('idMH');
            $table->string('idNH');
            $table->foreign('idNH')->references('idNH')->on('NamHoc');
            $table->foreign('idSV')->references('idSV')->on('SinhVien');
            $table->foreign('idMH')->references('idMH')->on('MonHoc');
            $table->date('ThoiGian');
            $table->float('LyThuyet');
            $table->float('ThucHanh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Diem');
    }
}