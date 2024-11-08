<?php

use App\Http\Controllers\HarryPotterController;
use Illuminate\Support\Facades\Route;

// Hier habe ich eine NEUE Hauptseite erstellt und diese Home gennant
// Diese Route führt bzw zeigt uns die Startseite der Anwendung
Route::get('/', function () {
    return view('home');
});
// Desweiteren habe ich hier eine Route erstellt um die Harry Potter API abzurufen
Route::get('/',[HarryPotterController::class, 'index']);