<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHouses extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Erstellung einer Tabelle der Häuser um sie zu speichern
        Schema::create('houses', function (Blueprint $table) {
            $table->id(); // Ich füge eine Spalte "id" hinzu, die automatisch eine eindeutige ID für jeden Eintrag erstellt , ähnlich wie ein `key` in React.
            $table->string('name'); // Hier erstelle ich eine Spalte 'name' vom Typ String  für die Namen der Häuser
            $table->text('description'); // Erstellung einer Beschreibung der Häuser
            $table->timestamps(); // Hier speichere ich Uhrzeit und Datum jeder Änderung 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
