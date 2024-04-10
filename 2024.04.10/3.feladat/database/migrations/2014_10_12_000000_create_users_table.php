<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fesztival', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->date('szuletesi_datum');
            $table->string('telefonszam');
            $table->string('email');
            $table->integer('foglalt_napok_szama');
            $table->integer('osszeg');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fesztivalok');
    }
};
