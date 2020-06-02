<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiemmonhocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diemmonhocs', function (Blueprint $table) {
            $table->bigIncrements('MaDiemMH');
            $table->unsignedBigInteger('MaHocSinh');
            $table->foreign('MaHocSinh')->references('MaHocSinh')->on('hocsinhs')->onDelete('cascade');
            $table->unsignedBigInteger('MaMonHoc');
            $table->foreign('MaMonHoc')->references('MaMonHoc')->on('monhocs')->onDelete('cascade');
            $table->integer('HocKy');
            $table->integer('NamHoc');
            $table->decimal('DiemMieng',8,2)->nullable();
            $table->decimal('Diem15P',8,2)->nullable();
            $table->decimal('Diem1Tiet',8,2)->nullable();
            $table->decimal('DiemHK',8,2)->nullable();
            $table->decimal('DiemTongHK',8,2)->nullable();
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
        Schema::dropIfExists('diemmonhocs');
    }
}
