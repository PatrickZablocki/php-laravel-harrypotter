# Projekt Laravel HarryPotter - Case Study

## Junior Fullstack-Entwickler*in (PHP) (m/w/d)

### Überblick
Diese Case Study bearbeite ich in vier Tagen. Es gibt zwei Hauptteile:

1. **Laravel Basics und REST API** – In diesem Teil baue ich eine Datenbankstruktur auf und nutze eine öffentliche API, um die Datenbank mit Informationen aus dem Harry-Potter-Universum zu füllen.
2. **Refactoring und Clean Code** – Hier analysiere und optimiere ich vorhandenen Code.

---

## Aufgabenteil 1: Laravel Basics und REST API

Im ersten Teil soll ich:
1. **Eine Datenbankstruktur** erstellen, die auf der **REST API des Harry Potter Franchise** basiert. Die API-Dokumentation ist hier zu finden: [PotterAPI Dokumentation](https://github.com/fedeperin/potterapi).
2. Die Datenbank soll drei Haupttabellen enthalten, die die Endpunkte **characters**, **houses** und **spells** der API berücksichtigen.
   - **Charaktere** sollen einem **Haus** zugeordnet werden können.
   - Jeder **Charakter** soll mehreren **Zaubersprüchen** zugeordnet werden können.
3. Zur Erstellung der Datenbank implementiere ich die passenden **Migrations und Models** und richte die erforderlichen **Relationen** ein.

Zusätzlich:
- **API-Abfrage**: Die Tabelle für die Zaubersprüche wird über die API mit Daten gefüllt. Dafür soll ich einen **Command** implementieren, der die Abfrage an die API durchführt.
- **HTTP-Client**: Für die API-Anfragen soll ich den **Guzzle Client** verwenden ([GuzzlePHP-Dokumentation](https://docs.guzzlephp.org/en/stable/)).

**Hinweis:** Es ist wichtig, die **OOP-Grundprinzipien** anzuwenden und sich Gedanken zu machen, wo Abstraktionen sinnvoll sind, um wiederverwendbaren Code zu schaffen.

---

## Aufgabenteil 2: Refactoring und Clean Code

Im zweiten Teil der Case Study geht es um das **Refactoring**. Hier bekomme ich eine Datei namens `ProductParser.php`. Meine Aufgabe ist es, den vorhandenen Code zu analysieren und zu optimieren.

---

### Kontakt bei Fragen
Falls ich Fragen zur Aufgabe habe, kann ich mich per E-Mail direkt an das Team wenden.

---

### Zusammenfassung meines Arbeitsplans
Ich habe vier Tage Zeit, diese Aufgaben zu bearbeiten:

- **Tag 0 (Donnerstag - PreDay)**: Lesen und Verständnis der Aufgabenstellung, Dokumentation durchsehen und erste Recherchen. Noch kein Code – nur informieren und planen.
  
- **Tag 1 (Freitag)**: Erstellen des Laravel-Projekts und erste Einrichtung der Datenbankstruktur (Tabellen und Migrations) basierend auf der API-Struktur.

- **Tag 2 (Samstag)**: Implementierung der API-Abfragen mit Guzzle und Verknüpfung der Datenbanktabellen. Befüllen der Datenbanktabelle für Zaubersprüche über die API-Abfrage.

- **Tag 3 (Sonntag)**: Refactoring der `ProductParser.php`-Datei. Optimierung und Anwendung von Clean Code-Prinzipien. Abschließende Tests und Verbesserungen sowie Dokumentation meiner Arbeit.


- **Tag 1 (Freitag)**: Geiler Tag!!

Das Durchlesen der Laravel-Documentation und YouTube-Videos hat mir sehr geholfen.  
Ja, hin und wieder habe ich gut gestruggelt, ABER es hat alles geklappt, so wie ich es verstanden habe und auch wollte. Ich denke, die Erfahrung, die ich mit React gemacht habe, hat mir hier sehr weitergeholfen.

Morgen geht es weiter mit der Implementierung.  
Ich freu mich!

- **Tag 2 (Samstag)**:  Scheiß Tag xD

Heute geht es die Datenbank zu füllen, die jeweiligen Charactere sind bei meiner API ja schon in ihrem House, Jedoch geht es hier ja auch um die Speels.
Das was ich Gestern gecodet habe hat Sinn gemacht.
Das was ich heute Code macht in manchen dingen sinn aber in manchen nicht.
Ich habe zwar die Tabellen erstellt im Model , ABER ich kriege keine Tabelle angezeigt.
Das verstehe ich nicht.
FehlerCode in der Konsole habe ich auch nicht.
