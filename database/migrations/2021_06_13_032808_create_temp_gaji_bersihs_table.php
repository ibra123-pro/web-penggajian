<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempGajiBersihsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_gaji_bersih', function (Blueprint $table) {
            $table->string('kd_jabatan',5); 
            $table->string('no_gakot',16)->nullable();
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
        Schema::dropIfExists('temp_gaji_bersih');
    }
}
