<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailGajiBersihsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_gaji_bersih', function (Blueprint $table) {
            $table->string('no_gaber',16);           
            $table->string('kd_jabatan',5);
            $table->integer('gakot')->nullable();
            $table->integer('bpjskeper')->nullable();
            $table->integer('bpjskekar')->nullable();  
            $table->integer('bpjstkper')->nullable();  
            $table->integer('bpjstkkar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_gaji_bersih');
    }
}
