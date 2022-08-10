<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailRekapCostumersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_rekap_costumer', function (Blueprint $table) {
            $table->string('no_rekcos',16);           
            $table->string('kd_jabatan',5);
            $table->integer('totpen')->nullable();
            $table->integer('totrew')->nullable();
            $table->integer('subpen')->nullable();
            $table->integer('subrew')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_rekap_costumer');
    }
}
