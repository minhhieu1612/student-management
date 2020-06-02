<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiemhocsinhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diemhocsinhs', function (Blueprint $table) {
            $table->bigIncrements('MaDiemHS');
            $table->unsignedBigInteger('MaHocSinh');
            $table->foreign('MaHocSinh')->references('MaHocSinh')->on('hocsinhs')->onDelete('cascade');
            $table->decimal('DiemHKI',8,2)->nullable();
            $table->decimal('DiemHKII',8,2)->nullable();
            $table->decimal('DiemCaNam',8,2)->nullable();
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
        Schema::dropIfExists('diemhocsinhs');
    }
}
