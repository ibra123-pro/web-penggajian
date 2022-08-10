<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thp', function (Blueprint $table) {
            $table->string('no_thp', 16)->primary;
            $table->date('tgl_thp');
            $table->integer('subgaber')->nullable();
            $table->integer('subkasbon')->nullable();
            $table->integer('subbaykas')->nullable();
            $table->integer('subsiskas')->nullable();
            $table->integer('subthp')->nullable();
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
        Schema::dropIfExists('thp');
    }
}
