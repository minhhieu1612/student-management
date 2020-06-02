<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThamsosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thamsos', function (Blueprint $table) {
            $table->id();
            $table->integer('TuoiToiThieu');
            $table->integer('SoLopToiDa');
            $table->integer('SiSoToiDa');
            $table->decimal('DiemToiThieu',8,2);
            $table->decimal('DiemToiDa',8,2);
            $table->decimal('DiemDat',8,2);
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
        Schema::dropIfExists('thamsos');
    }
}
