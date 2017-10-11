

# Laravel 5.5 Guestbook Example Project

## Requirements
- Ensure that you have an up to date version of [composer](https://getcomposer.org/)
 [virtual box](https://www.virtualbox.org/wiki/Downloads) installed.

## Install the Laravel project and Homestead

- ```composer install```
- ```php vendor/bin/homestead make```
- ```vagrant up```
- visit http://localhost:8000 to access the site

## Database Migration

- ```vagrant ssh``` to ssh onto the vagrant box
- ```cd code``` navigate to the project code
- ```php artisan migrate``` run the migrations that generate the database tables
- ```exit``` to leave the virtual machine terminal
