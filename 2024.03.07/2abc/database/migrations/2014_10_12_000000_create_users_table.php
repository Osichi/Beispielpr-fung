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
        Schema::create('sorozat', function (Blueprint $table) {
            $table->id();
            $table->string('cim');
            $table->date('megjelenes');
            $table->string('mufaj');
            $table->string('szereplok');
            $table->longText('leiras');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
