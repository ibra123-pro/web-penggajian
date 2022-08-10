<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailThpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_thp', function (Blueprint $table) {
            $table->string('no_thp',16);           
            $table->string('kd_jabatan',5);
            $table->integer('gaber')->nullable();
            $table->integer('kasbon')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_thp');
    }
}
