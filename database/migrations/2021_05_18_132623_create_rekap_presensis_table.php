<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekapPresensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekap_presensi', function (Blueprint $table) {
            $table->string('no_rekpres',16)->primary;
            $table->date('tgl_rekpres'); 
            $table->integer('totalseh')->nullable();             
            $table->integer('totalset')->nullable();
            $table->integer('totalmas')->nullable();           
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
        Schema::dropIfExists('rekap_presensi');
    }
}
