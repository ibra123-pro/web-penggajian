<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekapCostumersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekap_costumer', function (Blueprint $table) {
            $table->string('no_rekcos', 16)->primary;
            $table->date('tgl_rekcos'); 
            $table->integer('totalpen')->nullable();             
            $table->integer('totalrew')->nullable();           
            $table->string('nik',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekap_costumer');
    }
}
