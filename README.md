## Getting started

### Step 0: clone repository

After cloning or downloading the repository, you can get started. 

### Step 1: Run composer

First, you’ll want to update the composer requirements. Fetch the repository, and navigate to the directory that contains the repository

`composer install`

### Step 2: Configure database settings

For your local development server, you’ll want to change the config/database file to your connection information.

`config/database.php`

### Step 3: Migrate the database

`php artisan october:up`

## Special Notes

### Timetable.js

The timetable that is shown on the programme page is a slightly modified version to implement variable colors for each session.  
The script found in themes/appsforghent/assets/javascript/timetable.min.js is modified at line 133, so it is not recommended to update the script (unless the new version adds color support that is)  