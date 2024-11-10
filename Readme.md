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

# Documentation
- **Tag 1 (Freitag)**: Geiler Tag!!

Das Durchlesen der Laravel-Documentation und YouTube-Videos hat mir sehr geholfen.  
Ja, hin und wieder habe ich gut gestruggelt, ABER es hat alles geklappt, so wie ich es verstanden habe und auch wollte. Ich denke, die Erfahrung, die ich mit React gemacht habe, hat mir hier sehr weitergeholfen.

Morgen geht es weiter mit der Implementierung.  
Ich freu mich!

- **Tag 2 (Samstag)**: Schlechter Tag xD

Heute geht es darum, die Datenbank zu füllen. Die jeweiligen Charaktere sind in meiner API bereits ihren Häusern zugeordnet,
jedoch geht es hier auch um die Zauber (Spells). Was ich gestern programmiert habe, hat Sinn ergeben. Das, was ich heute programmiere,
ergibt teilweise Sinn, aber in manchen Dingen auch nicht. Ich habe zwar die Tabellen im Modell erstellt, ABER ich bekomme keine Tabelle angezeigt.
Das verstehe ich nicht. Auch in der Konsole erhalte ich keinen Fehlercode.

- **Tag 3 (Sonntag)**: Langer Tag

Ich war die Nacht länger wach und hatte mir viele Tutorials auf YouTube angesehen. Außerdem habe ich mich noch intensiver in die Laravel-Dokumentation eingelesen. Heute habe ich es geschafft, eine 'fetch'-Datei im Ordner Console/Command zu erstellen. Allerdings merke ich, dass ich zwar alle Daten aufrufen kann, diese aber nicht in einer Tabelle angezeigt werden, sondern nur in einer Liste. Selbst wenn ich im Frontend "Tablet" benutze, bekomme ich keine Tabelle. Ich denke, dass ich die Aufgabe nicht zu 100 % schaffe, aber das ist nicht schlimm, denn ich habe sehr, sehr viel dazu gelernt und viele Notizen gemacht. Und das Wichtigste: Es hat mega Spaß gemacht. Ich werde dennoch weiter daran arbeiten, selbst nach der Präsentation, da es mich schon sehr wurmt, dass ich es nicht schaffe.
