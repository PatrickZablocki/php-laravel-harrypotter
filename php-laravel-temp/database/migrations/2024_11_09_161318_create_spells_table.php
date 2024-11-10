<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpellsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Erstellung einer Tabelle der Spells um sie zu speichern
        Schema::create('spells', function (Blueprint $table) {
            $table->id(); // Wie auch bei den Anderen gebe ich jedem Spell eine ID
            $table->string('name'); // Name des Spells als String
            $table->text('effect'); // und eine beschreibung der Wirkung der Spells als text
            $table->timestamps(); // Auch hier ebenfalls eine Speicherung der Änderung Uhrzeit und datum
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spells');
    }
};
