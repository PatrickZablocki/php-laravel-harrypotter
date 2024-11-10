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
            $table->id(); // Automatische ID für jeden Charakter
            $table->string('name'); // Name des Charakters als String
            $table->foreignId('houses_id')->constrained('houses'); // Verknüpfung zu einem Haus, ähnlich wie eine Referenz in React-Props
            $table->string('role'); // rolle des Characters ( Lehrer oder Student) als String
            $table->timestamps(); // Auch hier ebenfalls eine Speicherung der Änderung Uhrzeit und datum
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
