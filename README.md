Crenspire: Symfony Practical.
========================

Installation
------------
 - Clone the project from Crenspire Symfony template [link][1].
     ```bash
     git clone https://github.com/crenspire/symfony-template.git
     ```
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
 - Run `yarn install`.
 - Run Symfony server:
    ```bash
    php -S localhost:8000/ -t public/
    ```
 - Run webpack server:
    ```bash
    yarn dev-server
    ```

[1]: https://github.com/crenspire/symfony-template
