## Table of contents
* [Description](#description)
* [Improvements](#Improvements)
* [Technologies](#technologies)
* [Setup](#setup)


## Description
This project allows you to log in, log out, and sign up with some validation to ensure user input and prevent duplicate users. It displays the stored articles individually, by category or all of them. It utilises an MVC style structure but it remains a work in progress.

## Improvements 
Further front-end form validation is needed for the sign up and login forms. The image directory needs refactoring to organise larger projects. As it stands, the paths and there corresponding controller functions are set in the index file. This should be implemented and required from its own file. The search bar needs to function. I would also like to add a user profile page. 

## Technologies
* PHP (MVC)
* MySQL
* HTML
* CSS
* Composer

## Setup 
This project requires a database containing an articles table and a users table. 
You will need to create a database and replace 'jsdatabase' located in 'core/Application.php' with your database name. If you have a root password set, enter it in 'database/Connection.php' in the PDO object. If you want to use the stored images you will need to set the image column to match the image file names, e.g. h1.jpg. You will also need to firstly sign up before the login form works. 
This MUST only be run localhost.

The articles table should include:
PRIMARY KEY id
title
excerpt
body
category
image

The users table should include:
PRIMARY KEY id
username
email
password

In the windows terminal you will need to run 'composer update' from the PHPMVCFramework directory.

Run php -S localhost:port number; from 'PHPMVCFramework/public' directory.