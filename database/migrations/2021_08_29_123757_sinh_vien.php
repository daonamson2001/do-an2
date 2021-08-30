<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SinhVien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SinhVien', function (Blueprint $table) {
            $table->string('idSV', 20)->primary();
            $table->string('tenSV', 100);
            $table->string('email')->unique();
            $table->boolean('gioiTinh');
            $table->date('ngaySinh');
            $table->string('idL');
            $table->foreign('idL')->references('idL')->on('Lop');
            $table->string('queQuan');
            $table->string('passWord');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SinhVien');
    }
}