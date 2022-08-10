<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasbonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasbon', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->date("tgl");
            $table->time('jam');
            $table->string('file', 255);
            $table->integer('biaya');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kasbon');
    }
}
