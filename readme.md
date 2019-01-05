# Laravel Forms & HTML

Long time ago, in a galaxy far away, Laravel used to come out-of-the-box with Forms management, but Taylor Otwell (the creator of Laravel) decided that he should focus his time more on core Laravel functionality and that is why he removed Forms from Laravel 5. There were too many issues on forms and it required a lot of time to fix. Instead of fixing issues himself, he decided to invest his time in improving Laravel and that is how the Laravel Collective was born and Forms & HTML package came to be.

In this lesson I will show you how to install and use the [Forms & HTML](https://laravelcollective.com/docs/5.2/html) package from Laravel Collective. We will cover every method mentioned in the documentation including Form Model Binding, Form Model Accessors, Custom Macros and Components.

## Installation

Clone repository to your drive and type in terminal there:

```
composer install
```

## Configuration

Copy file `.env.example` to `.env` file:

```
cp .env.example .env
```

and change the `APP_KEY` in `.env` using:

```
php artisan key:generate
```

Create empty database file called `database.sqlite` in `database` directory.

Run migrations and seed database with:

```
php artisan migrate --seed
```

## Running

From terminal type:

```
php artisan serve
```

You should get an address to open in your browser like http://localhost:8000.

**Have fun!**# Laravel_forms
