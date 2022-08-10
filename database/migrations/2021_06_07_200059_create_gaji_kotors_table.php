<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajiKotorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gaji_kotor', function (Blueprint $table) {
            $table->string('no_gakot',16)->primary;
            $table->date('tgl_gakot');
            $table->integer('subgapok')->nullable();
            $table->integer('subpen')->nullable();
            $table->integer('subrew')->nullable();
            $table->integer('subtotal')->nullable();
            $table->integer('subtunjangan')->nullable();
            $table->integer('submas')->nullable();
            $table->integer('subgakot');
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
        Schema::dropIfExists('gaji_kotor');
    }
}
