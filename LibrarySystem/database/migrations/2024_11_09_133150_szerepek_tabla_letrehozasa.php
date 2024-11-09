<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('szerepek', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->timestamps();
        });

        // Alap szerepek létrehozása
        DB::table('szerepek')->insert([
            ['nev' => 'admin'],
            ['nev' => 'konyvtaros'],
            ['nev' => 'raktaros'],
            ['nev' => 'felhasznalo'],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('szerepek');
    }
};
