<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailRekapPresensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_rekap_presensi', function (Blueprint $table) {
            $table->string('no_rekpres',16);           
            $table->string('kd_jabatan',5);
            $table->integer('totseh')->nullable(); 
            $table->integer('totset')->nullable(); 
            $table->integer('subseh')->nullable();
            $table->integer('subset')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_rekap_presensi');
    }
}
