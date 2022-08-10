<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempGajiKotorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_gaji_kotor', function (Blueprint $table) {
            $table->string('kd_jabatan',5); 
            $table->string('no_rekcos',16)->nullable();
            $table->string('no_rekmas',16)->nullable();
            $table->string('no_rekpres',16)->nullable();
            $table->integer('gapok')->nullable();
            $table->integer('totalpen')->nullable();
            $table->integer('totalrew')->nullable();  
            $table->integer('total')->nullable();  
            $table->integer('tunjangan')->nullable();
            $table->integer('totalmas')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_gaji_kotor');
    }
}
