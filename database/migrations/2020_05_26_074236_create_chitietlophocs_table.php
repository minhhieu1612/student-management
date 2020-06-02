<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitietlophocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietlophocs', function (Blueprint $table) {
            $table->bigIncrements('MaCTLopHoc');
            $table->unsignedBigInteger('MaLopHoc');
            $table->foreign('MaLopHoc')->references('MaLopHoc')->on('lophocs')->onDelete('cascade');
            $table->unsignedBigInteger('MaHocSinh')->nullable();
            $table->foreign('MaHocSinh')->references('MaHocSinh')->on('hocsinhs')->onDelete('cascade');
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
        Schema::dropIfExists('chitietlophocs');
    }
}
