<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TriggerBersihTempgakot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER clear_tem_gaji_kotor AFTER INSERT ON detail_gaji_kotor
        FOR EACH ROW 
        BEGIN
        DELETE FROM temp_gaji_kotor;
        END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER clear_tem_gaji_kotor');
    }
}
