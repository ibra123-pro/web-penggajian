<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpdateKasbonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('update_kasbon', function (Blueprint $table) {         
            $table->string('no_upkas', 5)->primary;
            $table->string('nik',20);
            $table->integer('totpen');             
            $table->integer('baykas');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('update_kasbons');
    }
}
