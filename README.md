<p align="center">
    <img src="https://avatars1.githubusercontent.com/u/11575442" alt="Swagsite" />
</p>

## Getting started

### Step 0: clone repository

After cloning or downloading the repository, you can get started.

### Step 1: Run composer

First, you’ll want to update the composer requirements. Fetch the repository, and navigate to the directory that contains the repository

  composer update

### Step 2: Configure database settings

For your local development server, you’ll want to change the server information of the following files:

  config/database.php

### Step 3: Migrate the database

  php artisan october:up
