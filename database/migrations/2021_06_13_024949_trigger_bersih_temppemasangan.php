<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TriggerBersihTemppemasangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER clear_tem_pemasangan AFTER INSERT ON detail_rekap_pemasangan
        FOR EACH ROW 
        BEGIN
            DELETE FROM temp_rekap_pemasangan;
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
        DB::unprepared('DROP TRIGGER clear_tem_pemasangan');
    }
}
