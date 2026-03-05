# NOTM Web Project

Modernizovaná webová prezentace a administrační systém postavený na Laravel 11 a Filament v3.

## Hlavní změny a vylepšení

1.  **Moderní Administrace:**
    *   Nasazení Filament v3 pro správu obsahu.
    *   Dostupné moduly: Projekty (Reference), Klienti, Blogové příspěvky, Zprávy z kontaktního formuláře.
    *   Podpora pro nahrávání obrázků a správu kategorií.

2.  **Frontend:**
    *   Nové stránky produktů: **Fotáček.cz**, **GastroTech**, **Map on Culture**.
    *   Nová stránka **Reference** s dynamickým načítáním z databáze.
    *   Sjednocený a čistý design pomocí Tailwind CSS.
    *   Standardizovaná navigace a patička.

3.  **Infrastruktura:**
    *   Aktualizace na Laravel 11 a PHP 8.2.
    *   Oprava vynucování HTTPS v lokálním prostředí.
    *   Oprava testovacího prostředí.

## Jak začít

### Instalace (Lokálně)

1. `composer install`
2. `cp .env.example .env` (nastavte DB)
3. `php artisan key:generate`
4. `php artisan migrate`
5. `php artisan storage:link`
6. `php artisan serve`

### Správa obsahu (Admin)

Vstup do administrace je na `/admin`.

**Přístupové údaje (výchozí):**
*   **Email:** `admin@notm.cz`
*   **Heslo:** `password`

Pro vytvoření nového administrátora použijte příkaz:
```bash
php artisan make:filament-user
```

## Použité technologie
*   **Framework:** Laravel 11
*   **Admin Panel:** Filament v3
*   **CSS Framework:** Tailwind CSS
*   **Databáze:** SQLite (výchozí pro lokální dev) / MySQL
