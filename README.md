## Table of contents
* [Description](#description)
* [Improvements](#Improvements)
* [Technologies](#technologies)
* [Setup](#setup)


## Description
This project allows you to log in, log out, and sign up with some validation to ensure user input and prevent duplicate users. It displays the stored articles individually, by category or all of them. It utilises an MVC style structure but it remains a work in progress.

## Improvements 
Further front-end form validation is needed for the sign up and login forms. As it stands, the paths and there corresponding controller functions are set in the index file. This should be implemented and required from its own file. The search bar needs to function. I would also like to add a user profile page. 

## Technologies
* PHP (MVC)
* MySQL
* HTML
* JavaScript
* CSS
* Composer

## Setup 
This project requires a database containing a users table if you want to use the sign-up or login functionality. 
You will need to create a database and replace 'jsdatabase' located in 'core/Application.php' with your database name. If you have a root password set, enter it in 'database/Connection.php' in the PDO object. 
This MUST only be run localhost.

The users table should include:
PRIMARY KEY id
username
email
password

In the windows terminal you will need to run 'composer update' from the News-Website directory.

Run php -S localhost:port number; from 'News-Website/public' directory.
