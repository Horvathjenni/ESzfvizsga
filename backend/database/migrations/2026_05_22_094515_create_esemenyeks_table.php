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
        Schema::create('esemenyeks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategoria_id')->constrained('kategoriaks');
            $table->string('esemeny_nev',20);
            $table->longText('leiras');
            $table->date('datum')->useCurrent();
            $table->integer('ar');
            $table->integer('resztvevok');
            $table->string('kepUrl',255);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('esemenyeks');
    }
};
