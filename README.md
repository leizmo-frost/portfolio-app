# Lermodious Karanja Portfolio — Laravel + Livewire

This is a source bundle for the portfolio supplied in the conversation. It converts the original Tailwind/HTML/JavaScript page into a Laravel 13 + Livewire 4 application.

## Stack

- Laravel 13
- Livewire 4
- Blade
- Tailwind CSS through Vite
- SQLite by default
- Eloquent
- No custom application JavaScript

The original page's mobile menu, project filtering, contact submission, back-to-top behavior, typing presentation, and decorative motion are implemented with Livewire and/or CSS rather than the original page JavaScript.

## 1. Create the Laravel application

Laravel 13 requires PHP 8.3+.

```bash
laravel new lermodious-portfolio
cd lermodious-portfolio
```

Choose the normal Laravel defaults. You do not need Breeze or Jetstream for this portfolio.

## 2. Install Livewire

```bash
composer require livewire/livewire
php artisan livewire:layout
```

## 3. Copy this bundle

Copy the folders in this bundle into the root of your Laravel project, preserving the paths.

## 4. Configure the database

For the simplest local setup, use SQLite:

```bash
touch database/database.sqlite
```

In `.env`:

```env
DB_CONNECTION=sqlite
```

If Laravel generated a DB_DATABASE line, remove it or leave it blank.

## 5. Run migrations and seed the portfolio

```bash
php artisan migrate
php artisan db:seed
```

## 6. Build assets

Use the Laravel/Vite workflow:

```bash
npm install
npm run build
```

## 7. Run

```bash
composer run dev
```

Open:

http://localhost:8000

## Development

For faster frontend iteration:

```bash
npm run dev
```

and in another terminal:

```bash
php artisan serve
```

## Optional: Laravel Boost

Because this project is intended to be developed with AI assistance, Laravel's current documentation recommends Boost for Laravel-aware agents:

```bash
composer require laravel/boost --dev
php artisan boost:install
```

## Important

The contact form writes to `contact_messages`. It does not pretend to send email. Add mail configuration later if you want notification emails.

The project data lives in `projects` and is seeded from the portfolio content.
