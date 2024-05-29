![Image](https://raw.githubusercontent.com/bapakfadil/company-bankruptcy/main/public/assets/static/images/samples/Screenshot%202024-05-28%20200729.png)

<h1 align="center">Company Bankruptcy Predicition Using Grover Model</h1>

## Description

A simple web application to calcute a Company Bankruptcy based on their annual financial data using Grovel Model.

Ongoing Development.

## Installation

1. Clone this project
    ```bash
    git clone https://github.com/bapakfadil/company-bankruptcy company-bankruptcy
    
    cd company-bankruptcy
    ```
2. Install Dependencies

    ```bash
    composer install
    ```

    And Javascript dependencies

    ```bash
    yarn install && yarn dev

    #OR

    npm install && npm run dev
    ```

3. Set up Laravel Configurations

    ```bash
    rename .env.example into .env

    php artisan key:generate
    ```

4. Set your database in .env

5. Migrate database

    ```bash
    php artisan migrate

    #OR

    php artisan migrate --seed
    ```

6. Serve the application

    ```bash
    npm run dev

    php artisan serve
    ```

7. Login credentials
    ```bash
    username : mazer
    password : password
    ```
