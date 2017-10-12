## Guestbook Installation

### Install Composer

`$ wget http://getcomposer.org/installer`

`$ php installer`

### Install Dependencies with Composer

`$ php composer.phar install`

### Create Environment File

`$ cp .env.example .env`

Edit the .env file to have the config for SQLite. The *only* database settings needed are:

`DB_CONNECTION=sqlite`

`DB_DATABASE=/full/path/to/db.sqlite3`

(Replace the path in the second setting to wherever the files have been cloned.)

Then add the application key to the environment:

`$ php artisan key:generate`

### Create the Database

Make the empty database in the location pointed to by `DB_DATABASE`:

`$ touch db.sqlite3`

Create the tables, and populate the database:

`$ php artisan migrate`

`$ php artisan db:seed`

### Start the App

Start the server, and the app will be available on port 8000.