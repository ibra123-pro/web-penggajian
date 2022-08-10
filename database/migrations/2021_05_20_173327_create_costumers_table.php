<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostumersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costumer', function (Blueprint $table) {
            $table->string('no_costumer', 16)->primary;
            $table->bigInteger('user_id');
            $table->date('tgl');
            $table->string('nm_costumer',50);
            $table->string('telepon',15);
            $table->string('id_paket',5);
            $table->string('work', 255);
            $table->string('ktp',255);
            $table->string('alamat',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('costumers');
    }
}
