<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempThpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_thp', function (Blueprint $table) {
            $table->string('kd_jabatan',5); 
            $table->string('no_upkas',5)->nullable();
            $table->string('no_gaber',16)->nullable();
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
        Schema::dropIfExists('temp_thp');
    }
}
