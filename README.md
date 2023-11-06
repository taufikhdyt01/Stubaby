<p align="center">
  <a href="https://github.com/taufikhdyt01/stubaby">
    <h1 align="center" style="color: #4B47FF">StuBaby</h1>
  </a>
  <p align="center">
    Stunting Education System for Postpartum Mothers Based on a Website
  </p>
</p>


# Team Profile

## This is our Members

* Abdul Rasyid Himawan - 215150607111003
* Delisya Jayadi - 215150600111001
* Taufik Hidayat - 215150600111009

# Getting Started

## Prerequisites
You will need the following to run StuBaby:
- PHP >= 8.0.2
- Composer
- Node.js
- NPM
- Database server (MySQL, MariaDB, PostgreSQL, or SQLite)

## Installation

The following steps will guide you through the installation process of StuBaby for running in a development environment locally on your machine:
1. Clone the latest version of StuBaby from the repository 
2. Run `composer install` to install the required PHP dependencies
3. Copy the .env.example file to .env and edit the database credentials according to your database server
4. Run `composer require laravel/ui`
5. Run `composer require pusher/pusher-php-server`
6. Run `php artisan ui bootstrap --auth`
7. Run `php artisan key:generate` to generate a new application key
8. Run `php artisan migrate` to create the database tables. You can also add the `--seed` flag to seed the database with some dummy data
9. Run `php artisan serve` to start the development server
10. Open another terminal and run `npm install && npm run build` to install the required node modules
11. Run `npm run dev` to compile the assets for development
12. Open your browser and go to `http://localhost:8000` to view the application


# License

StuBaby is open-sourced software licensed under the [MIT license](LICENSE).