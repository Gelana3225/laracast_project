# Laracast Project (Laravel 12)

A Laravel 12 web application using **Vite** for the frontend toolchain and **Tailwind CSS** for styling.

## Tech stack

- **Backend**: Laravel 12, PHP 8.2+
- **Frontend**: Vite, Tailwind CSS
- **Developer tools**: PHPUnit, Laravel Pint, Laravel Pail, Debugbar (dev)

## Requirements

- PHP **8.2+**
- Composer
- Node.js + npm
- A database (SQLite/MySQL/etc.)

## Quick start (local)

1) Install PHP dependencies

```bash
composer install
```

2) Create your environment file and app key

```bash
copy .env.example .env
php artisan key:generate
```

3) Configure `.env`

- Set `APP_URL`
- Set database credentials (`DB_*`)
- If you use mail features, configure `MAIL_*`

4) Run migrations

```bash
php artisan migrate
```

5) Install frontend dependencies and build assets

```bash
npm install
npm run build
```

## Run the project (development)

This project includes a single command that starts the app server, queue worker, log viewer (Pail), and Vite dev server together:

```bash
composer run dev
```

If you prefer running them separately:

```bash
php artisan serve
php artisan queue:listen --tries=1
php artisan pail --timeout=0
npm run dev
```

## Testing

```bash
composer test
```

## Code style

```bash
./vendor/bin/pint
```

## Notes

- **Queues**: if you’re using queued jobs, make sure you’re running a queue worker (`php artisan queue:listen`).
- **Mail**: for local development, consider using a mail sandbox (e.g. Mailpit/Mailtrap) and set the `MAIL_*` variables accordingly.

## Project structure (high level)

- `app/` — application code
- `routes/` — route definitions
- `resources/` — Blade views, JS/CSS source
- `database/` — migrations, seeders, factories

## License

Laravel is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
