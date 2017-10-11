

# Laravel 5.5 Guestbook Example Project

## Requirements
- Ensure that you have an up to date version of [composer](https://getcomposer.org/)
 and [virtual box](https://www.virtualbox.org/wiki/Downloads) installed.

## Install the Laravel project and Homestead

- ```composer install``` installs Laravel and any dependencies required by the project
- ```php vendor/bin/homestead make``` generates a homestead.yml file which will be used to generate the virtual machine
- ```vagrant up``` create and run the virtual machine

- Copy the ```.env.example``` file and create a new file called ```.env```
- Run ```php artisan key:generate``` to generate an application key which is used for encryption

## Database Migration

- ```vagrant ssh``` to ssh onto the vagrant box
- ```cd code``` navigate to the project code
- ```php artisan migrate``` run the migrations that generate the database tables
- ```php artisan db:seed``` to run the database seeder which will populate the table with dummy data
- ```exit``` to leave the virtual machine terminal

## Access the site

- visit http://localhost:8000