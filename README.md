# Laravel Todo App Coding Challenge

Welkom bij de Laravel Todo App coding challenge! In deze opdracht ga je een Todo-applicatie bouwen met behulp van Laravel. De applicatie moet een eenvoudige gebruikersinterface bieden voor het beheren van taken.

## Specificaties

### Basisfunctionaliteit

1. **Takenlijst**: Gebruikers moeten hun taken kunnen toevoegen, bekijken, bewerken en verwijderen.
2. **Statusbeheer**: Elke taak moet een status hebben (bijv. 'Te doen', 'In uitvoering', 'Voltooid').
3. **Gebruikersauthenticatie**: Voeg een eenvoudig systeem voor gebruikersregistratie en -aanmelding toe, zodat elke gebruiker zijn eigen taken kan beheren.

### Uitbreidingen

Kies één van de volgende extra features om te implementeren:

1. **Vervaldatum en Notificaties**: Laat gebruikers een vervaldatum voor hun taken instellen en implementeer een notificatiesysteem dat hen herinnert aan hun aankomende taken.
   
2. **Prioritering en Tagging**: Sta gebruikers toe om hun taken te prioriteren (bijv. met een 1-5 rating) en voeg mogelijkheid voor tagging toe zodat taken gecategoriseerd kunnen worden.
   
3. **Team en Samenwerking**: Maak het mogelijk voor gebruikers om hun taken te delen en samen te werken met andere gebruikers door taken aan elkaar toe te wijzen.

4. **Kalenderintegratie**: Integreer de Todo-app met een kalender-API (bijv. Google Calendar) zodat gebruikers hun taken in hun persoonlijke agenda kunnen zien.

5. **Gamificatie en Beloningen**: Introduceer een systeem waarbij gebruikers punten of beloningen kunnen verdienen voor het voltooien van taken.

## Vereisten

- Laravel 10.x of hoger
- PHP 8.1 of hoger
- Composer
- Een webserver (bijv. Apache of Nginx)

## Installatie

1. **Fork de repository** naar je eigen GitLab-account door op de **Fork** knop rechtsboven op de pagina van de repository te klikken.

2. **Clone de geforkte repository** naar je lokale machine:
   ```bash
   git clone https://github.com/<jouw-gebruikersnaam>/<naam-van-geforkte-repository>.git
   cd <naam-van-geforkte-repository>
   ```

2. Gebruik **composer** voor het aanmaken van een nieuw Laravel project:
   ```bash
   composer create-project --prefer-dist laravel/laravel todo-app
   ```

3. Maak een kopie van het `.env.example` bestand en noem het `.env`:
   ```bash
   cd todo-app
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

## Inleverinstructies

1. **Commit je werk regelmatig** en zorg ervoor dat je duidelijke commitberichten gebruikt.

2. **Maak een nieuwe branch** voor je feature vanaf de `main` branch:
   ```bash
   git checkout -b feature/[jouw-feature]
   ```

3. Werk aan je feature en **push je wijzigingen** naar je fork:
   ```bash
   git push origin feature/[jouw-feature]
   ```

4. **Dien een Pull Request (PR)** in naar de hoofdrepository wanneer je klaar bent met je implementatie. Dit kun je doen door naar de Pull Request sectie van je geforkte repository op GitHub te gaan en de PR aan te maken richting de `main` branch van de originele repository.

5. Zorg ervoor dat je duidelijk beschrijvingen toevoegt aan je commitberichten en PR zodat het duidelijk is wat je hebt veranderd.

We kijken uit naar je inzending en zijn benieuwd naar je creativiteit en codeer vaardigheden!

### Veel succes!
