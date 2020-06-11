<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHocsinhLophocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hocsinh_lophoc', function (Blueprint $table) {
            $table->bigIncrements('MaCTLopHoc');
            $table->unsignedBigInteger('MaHocSinh');
            $table->unsignedBigInteger('MaLopHoc');

            $table->foreign('MaLopHoc')->references('MaLopHoc')->on('lophocs')->onDelete('cascade');     
            $table->foreign('MaHocSinh')->references('MaHocSinh')->on('hocsinhs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hocsinh_lophoc');
    }
}
