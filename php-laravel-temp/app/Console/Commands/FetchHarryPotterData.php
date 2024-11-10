<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;
use App\Models\Character;
use App\Models\Houses;
use App\Models\Spells;

class FetchHarryPotterData extends Command
{
    // Hier gebe ich den befehl für den Command bzw Stelle ihn fest
    protected $signature = 'fetch:harrypotter-data';
    // Das ist die Beschreibung für den Befehl
    protected $description = 'Fetch data from Harry Potter API and save to the database';
    // Das ist der Konstrukt den ich aufurfe also der BEFEHL
    public function __construct()
    {
        // Ich rufe den Konstruktor der "Command"-Klasse auf, damit alles richtig funktioniert.
        parent::__construct();
    }

    public function handle ()
    {
        // Zuerst erstelle ich einen HTTP-Client, mit dem ich Daten aus der API abhole.
        $client = new Client();

        $this->info("Lade Charactere Daten...");
        // Jetzt rufe ich die API auf, die mir Informationen über die Charaktere aus der Harry Potter-Welt gibt.
        // Ich sende eine GET-Anfrage und speichere die Antwort.
        $res = $client->get('https://hp-api.onrender.com/api/characters');
        // Die Antwort von der API ist im JSON-Format. Ich wandle sie in ein einfaches PHP-Array um.
        $characters = json_decode($res->getBody(),true);
        // Hier gehe ich alle Charactere durch und speichere diese in meiner Datenbank
        foreach ($characters as $char) {
            // Wenn das Haus des Charakters noch nicht in meiner Datenbank ist, wird es hier angelegt.
            // Falls das Haus nicht angegeben ist, nehme ich 'Unknown' als Standardwert.
            $house = Houses::firstOrCreate(['name' => $char['house'] ?? 'Unknown']);
             // Jetzt speichere ich den Charakter in der "Character"-Tabelle in der Datenbank.
             // Ich speichere den Namen des Charakters, die Haus-ID und die Rolle des Charakters ( Also Student oder professor).
            Character::create([
                'name' => $char['name'],
                'houses_id' => $house->id,
                'role' => $char['role'] ?? 'unknown'
            ]);
        }
        // Hier gebe ich heraus das der Character erfolgreich gespeichert wurde
        $this->info("Charakter Daten wurden gespeichert!");

        // Diese Nachricht erscheint wenn ich einen zauberspruch Lade bzw aufrufe
        $this->info("Lade Zaubersprüche Daten...");

        // Ich rufe die API auf jedoch für die Spells
        $res = $client->get('https://hp-api.onrender.com/api/spells');

        // Ich wandle auch diese Antwort wieder von JSON in ein PHP-Array um.
        $spells = json_decode($res-> getBody(), true);
        
        // Hier speichere ich alle Zaubersprüche ab
        foreach ($spells as $spell) {
            // Ich speichere den Namen des Spells und den Effekt des spells.
            // Wenn der Effekt nicht angegeben ist, nehme ich 'No effect' als Standardwert.
            Spells::create([
                'name' => $spell['name'],
                'effect' => $spell['effect'] ?? 'No effect'
            ]);
        }        
        // Hier gebe ich aus das der Spell erfolgreich gespeichert wurde
        $this->info("Zaubersprüche daten wurden gespeichert!");
    }
    
}
