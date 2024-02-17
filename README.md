NORSU Computer Mapping and Information System (CMIS)

User: carlo@gmail.com
Pass: secret

User: user@user.com
Pass: secret

```


test the application on your local machine with additional demo data you may use the following command.

```php

php artisan starter:insert-demo-data --fresh

```

```

## Clear All Cache

```bash
composer clear-all
```

this is a shortcut command clear all cache including config, route, and more

## Core Features

* User Authentication
* Social Login
  * Google
  * Facebook
  * Github
  * Build in a way adding more is much easy now
* User Profile with Avatar
  * Separate User Profile table
* Role-Permissions for Users
* Dynamic Menu System
* Language Switcher
* Localization enabled across the project
* Backend Theme
  * Bootstrap 5, CoreUI
  * Fontawesome 6
* Frontend Theme
  * Tailwind
  * Fontawesome 6
* Article Module
  * Posts
  * Categories
  * Tags
  * Comments
  * wysiwyg editor
  * File browser
* Application Settings
* External Libraries
  * Bootstrap 5
  * Fontawesome 6
  * CoreUI
  * Tailwind
  * Datatables
  * Select2
  * Date Time Picker
* Backup (Source, Files, Database as Zip)
* Log Viewer
* Notification
  * Dashboard and details view

## Installation

1. Clone or download the repository
2. Go to the project directory and run `composer install`
3. Create `.env` file by copying the `.env.example`. You may use the command to do that `cp .env.example .env`
4. Update the database name and credentials in `.env` file
5. Run the command to generate application key `php artisan key:generate`
6. Run the command `php artisan migrate --seed`
7. Link storage directory: `php artisan storage:link`
8. You may create a virtualhost entry to access the application or run `php artisan serve` from the project root and visit `http://127.0.0.1:8000`

*After creating the new permissions use the following commands to update cashed permissions.*

`php artisan cache:forget spatie.permission.cache`

