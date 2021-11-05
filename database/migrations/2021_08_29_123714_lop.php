<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lop', function (Blueprint $table) {
            $table->string('idL', 20)->primary();
            $table->string('tenLop');
            $table->string('idCN');
            $table->foreign('idCN')->references('idCN')->on('ChuyenNganh');
            $table->boolean('HoatDong');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Lop');
    }
}