# Post App
## _A web app hybrid of two common social media sites_

Post app came about from the idea of having a place for teams to share news and updates without hundreds of replies and notifications.


## Features

- Login/Register function for anyone to create an account and post
- Viewable posts without registering - these cannot be 'liked' or 'unliked'
- Simple clean interface with company logo and lists of posts
- Posts and user details are held in a MySql database
- Ability to 'like' and 'unlike' posts of others.

This is only a simple show of my understanding of PHP and the Laravel framework, the 'Dashboard' and 'Home' pages are not plugged in just yet, in the future these will contain a list of posts made by the specific user (as currently shown when a username is clicked on) and possibly a more in depth profile screen with a profile image and/or brief description. Ideas and suggestions are welcome!  

## Tech

Post app was built with and uses the following -

- PHP 7
- Laravel
- Eloquent
- Composer
- Tailwind


## Installation

Post app requires PHP Artisan to run and laravel installed.
> $ php artisan migrate

> // This will create the database

> $ php artisan serve

> // This will run the dev environment to view the app
