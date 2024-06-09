# Identity Provider

This repository serves as identity provider for the [Service Provider repository](https://github.com/MMoreira01/service-provider).

This is a Laravel project that provides a REST API using OAuth2.0 for the service provider to consume.

This should be run on port 8000, while the service provider should be run on port 8001.

The Identity Provider is a simulated Univeristy Moodle Plataform, which can be used to login on other services related to the University or academic services.

## Setup

1. Install dependencies and copy the .env

```bash
composer install
npm install
```

2. Copy the .env file, generate a key and the assets

```bash
php -r "copy('.env.example', '.env');"
php artisan key:generate
npm run prod
```

3. Create a database and fill the .env file with those details

```bash
# .env
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

4. Run the migrations and create the admin user

```bash
php artisan migrate
php artisan db:seed
```

5. Create Client

```bash
php artisan passport:client
```

6. Generate Passport Encryption Keys

```bash
php artisan passport:keys
```

7. Add the Credentials to the [Service Provider App](https://github.com/MMoreira01/service-provider)

```bash
# .env
OAUTH_CLIENT_ID=yyyyyyyyyyyyyyyyyyyyyyyyyyyyy
OAUTH_CLIENT_SECRET=xxxxxxxxxxxxxxxxxxxxxxxxxx
IDP_URL=http://127.0.0.1:8000
APP_URL=http://127.0.0.1:8001
```

8. Serve the project

```bash
php artisan serve --port=8000
```

---

## Usefull commands

-   While testing Migrations and Seeders

```bash
php artisan migrate:rollback
php artisan migrate
php artisan db:seed
```

## Credits

-   [Marco Moreira](https://github.com/MMoreira01)
-   [Francisco Ferreira](https://github.com/feel31ng)
-   [João Rosa](https://github.com/joaorosa30)
