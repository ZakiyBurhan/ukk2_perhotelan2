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
        DB::unprepared('CREATE TRIGGER update_jumblah after INSERT ON rooms
            FOR EACH ROW
            BEGIN UPDATE kamars set
            jumblah_kamar = jumblah_kamar - NEW.jumblah
            WHERE tipe_kamar = NEW.tipe_kamar;
            END'
        );

        DB::unprepared('CREATE TRIGGER delete_jumblah after DELETE ON rooms
            FOR EACH ROW
            BEGIN UPDATE kamars set
            jumblah_kamar = jumblah_kamar + OLD.jumblah
            WHERE tipe_kamar = OLD.tipe_kamar;
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
