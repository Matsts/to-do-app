# Laravel Todo App 
Welkom bij mijn to-do app
## Specificaties

### Basisfunctionaliteit

1. **Takenlijst**: Gebruikers kunnen hun taken kunnen toevoegen, bekijken, bewerken en verwijderen.
2. **Statusbeheer**: Elke taak kan een status en prioriteit hebben (bijv. 'Te doen', 'In uitvoering', 'Voltooid').
3. **Teams** Gebruikers kunnen in teams werken door deze aan te maken en andere er voor uitnodigen.
4. **Gebruikersauthenticatie**: Een eenvoudig systeem voor gebruikersregistratie en -aanmelding.

## Installatie

1. **Clone de repository** naar je lokale machine:
   ```bash
   git clone https://github.com/matsts/<to-do-app>.git
   cd <to-do-app>
   ```

2. Maak een kopie van het `.env.example` bestand en noem het `.env`:
   ```bash
   cp .env.example .env
   ```

4. Genereer een nieuwe applicatiesleutel:
   ```bash
   php artisan key:generate
   ```

5. Configureer je databaseverbinding in het `.env` bestand.

6. Voer de migraties uit:
   ```bash
   php artisan migrate
   ```

7. Start de server:
   ```bash
   php artisan serve
   ```

Je kunt nu de applicatie openen in je browser op `http://localhost:8000`.
