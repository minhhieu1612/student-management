<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHocsinhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hocsinhs', function (Blueprint $table) {
            $table->bigIncrements('MaHocSinh');
            $table->text('HoVaTen');
            $table->boolean('GioiTinh');
            $table->date('NgaySinh');
            $table->text('DiaChi');
            $table->text('QueQuan')->nullable();
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
        Schema::dropIfExists('hocsinhs');
    }
}
