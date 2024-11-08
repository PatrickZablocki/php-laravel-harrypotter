<?php

namespace App\Http\Controllers;
// Wie auch Bei React muss ich hier immer die Sachen IMPORTIEREN hier wird jedoch " Use " genutzt
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HarryPotterController extends Controller
{   
    // Wie bei JS muss ich auch hier eine function schreiben jedoch schreibt mann diese in " public " 
    // hier nenne ich es 'index' somit ist diese function 'public'
    public function index ()
    {
    // Hier muss ich die Harry Potter API Abrufen 
    // Ich mus erstmal den client erstellen um die API Abzurufen
    $client = new Client();
    // Ich rufe die API aus , leider wurde ich nicht so schlau aus der GitHub Documentation
    // Somit nutze ich die Harry Potter API die Öffentlich ist ich verlinke diese nochmal in der MD Datei
    $res = $client->get('https://hp-api.onrender.com/api/characters');
    $characters = json_decode($res->getBody()->getContents());
    // Hiermit rufe ich alle Chars ab

    // Das Gleiche mache ich nun für die Häuser
    $housesRavenclaw = $client->get('https://hp-api.onrender.com/api/characters/house/ravenclaw');
    $housesSlytherin = $client->get('https://hp-api.onrender.com/api/characters/house/slytherin');
    $housesHufflepuff = $client->get('https://hp-api.onrender.com/api/characters/house/hufflepuff');
    $housesGriffendor = $client->get('https://hp-api.onrender.com/api/characters/house/gryffindor');

    // Leider hat es nicht geklappt ich Versuche das gleiche jedoch mit der json_decode Methode
    $housesRavenclaw = json_decode($housesRavenclaw->getBody()->getContents());
    $housesSlytherin = json_decode($housesSlytherin->getBody()->getContents());
    $housesHufflepuff = json_decode($housesHufflepuff->getBody()->getContents());
    $housesGriffendor = json_decode($housesGriffendor->getBody()->getContents());

    // Das beste zum Schluss die Zaubersprüche
    $spellsRes = $client->get('https://hp-api.onrender.com/api/spells');
    $spells = json_decode($spellsRes->getBody()->getContents());

    // Ich gebe hier den Befehl an die startseite alle Charactere aus den Häusern abzurufen
    return view('home', compact('characters', 'housesRavenclaw', 'housesSlytherin', 'housesHufflepuff', 'housesGriffendor', 'spells'));
    }

}
