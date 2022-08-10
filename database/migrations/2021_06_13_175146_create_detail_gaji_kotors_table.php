<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailGajiKotorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_gaji_kotor', function (Blueprint $table) {
            $table->string('no_gakot',16);           
            $table->string('kd_jabatan',5);
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
        Schema::dropIfExists('detail_gaji_kotor');
    }
}
