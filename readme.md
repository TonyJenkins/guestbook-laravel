

## Guestbook Installation

Ensure that you have an up to date version of composer and also have virtual box installed

- ```composer install```
- ```php vendor/bin/homestead make```
- ```vagrant up```
- visit http://localhost:8000 to access the site


Database Migration
- ```vagrant ssh```
- ```cd code```
- ```php artisan migrate```
