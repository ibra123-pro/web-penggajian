<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajiBersihsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gaji_bersih', function (Blueprint $table) {
            $table->string('no_gaber', 16)->primary;
            $table->date('tgl_gaber'); 
            $table->integer('subgakot')->nullable();
            $table->integer('subbpjskeper')->nullable();
            $table->integer('subbpjskekar')->nullable();
            $table->integer('subbpjstkper')->nullable();
            $table->integer('subbpjstkkar')->nullable();
            $table->integer('subgaber')->nullable();
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
        Schema::dropIfExists('gaji_bersih');
    }
}
