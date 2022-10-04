<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER update_jumlah_kamar after INSERT ON rooms
            FOR EACH ROW
            BEGIN UPDATE kamars set
            jumblah_kamar = jumblah_kamar - NEW.jumblah_kamar
            WHERE kamar_id = NEW.kamar_id;
            END'
        );

        DB::unprepared('CREATE TRIGGER delete_jumlah_kamar after DELETE ON rooms
            FOR EACH ROW
            BEGIN UPDATE kamars set
            jumblah_kamar = jumblah_kamar + OLD.jumblah_kamar
            WHERE kamar_id = OLD.kamar_id;
            END'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger');
    }
};
