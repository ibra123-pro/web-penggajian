<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailRekapPemasangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_rekap_pemasangan', function (Blueprint $table) {
            $table->string('no_rekmas',16);           
            $table->string('kd_jabatan',5);
            $table->integer('totpem')->nullable();
            $table->integer('subtotal')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_rekap_pemasangan');
    }
}
