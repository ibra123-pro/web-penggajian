<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJabatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jabatan', function (Blueprint $table) {
            $table->string('kd_jabatan',5)->primary;
            $table->string('nm_jabatan',30);
            $table->integer('baypem')->nullable();
            $table->integer('baypen')->nullable();
            $table->integer('bayseh')->nullable();           
            $table->integer('bayset')->nullable();            
            $table->integer('gapok')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jabatans');
    }
}
