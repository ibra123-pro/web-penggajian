<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->string('nik',20)->primary;
            $table->string('nm_karyawan',50);            
            $table->string('kd_jabatan',5);
            $table->integer('tunjangan')->nullable();
            $table->string('jk',2);
            $table->date('tgl_lahir');
            $table->string('agama',15);
            $table->string('alamat',255);
            $table->string('telepon',15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawan');
    }
}
