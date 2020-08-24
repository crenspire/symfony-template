Crenspire: Symfony Practical.
========================

Installation
------------
 - Fork the project from Crenspire Symfony template [link][1].
 - Clone it in your system.
 - Run `cd symfony-template`.
 - Run `composer install`.
 - Use mysql as database in your `.env` file.
     ```dotenv
    DATABASE_URL=mysql://DB_USER:DB_PASS@127.0.0.1:3306/DB_NAME
    ```
 - Update the `DATABASE_URL` as per your database credentials.
 - Run below commands to set up db.
     ```bash
    $ php bin/console doctrine:database:create
    $ php bin/console doctrine:schema:create
    $ php bin/console doctrine:fixtures:load
    ```
 - Run `yarn install` or `npm install`.
 - Run Symfony server:
    ```bash
    php -S localhost:8000/ -t public/
    ```
 - Run webpack server:
    `yarn watch` or `npm run watch`.

[1]: https://github.com/crenspire/symfony-template
