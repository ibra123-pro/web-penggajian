<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemasangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemasangan', function (Blueprint $table) {
            $table->string('no_pemasangan', 16)->primary;
            $table->bigInteger('user_id');
            $table->date('tgl');
            $table->string('no_costumer',14);
            $table->string('berac',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemasangan');
    }
}
