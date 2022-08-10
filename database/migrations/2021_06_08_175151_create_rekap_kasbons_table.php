<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekapKasbonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekap_kasbon', function (Blueprint $table) {
            $table->string('no_rekkas', 16)->primary;
            $table->date('tgl_rekkas'); 
            $table->integer('totpen');             
            $table->integer('baykas');           
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
        Schema::dropIfExists('rekap_kasbon');
    }
}
