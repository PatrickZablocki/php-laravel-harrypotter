<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacter extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {   
        // Erstellung der Tabelle der Charactere um sie zu speichern
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('houses_id')->constrained('houses');
            $table->string('role');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
