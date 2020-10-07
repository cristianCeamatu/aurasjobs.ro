![Hireable](https://cdn.rawgit.com/hiendv/hireable/master/styles/flat/yes.svg) 
# ![Laravel logo](./.github/laravel-logo.png)

> ### Single page website used in production by a recruiting agency, built using CRUD, advanced patterns and Laravel, Jquery, Sass, MySQL utilities. Candidates can apply directly through a form on the website and can make contact requests, the client receives an email for each application or contact request. The website is mobile responsive.

----------

## Website mockup

![screenshot](./.github/app-screenshot.png)


## The website has internationalization using Laravel features, available in English and Romanian. Live versions Demo:

[English version Link](https://www.aurasjobs.ro/?lang=en)  -  [Romanian version Link](https://www.aurasjobs.ro)

## Future features

Currently working on the admin page where the client will manage the database of the candidates' applications and contact requests

## Built With

- Laravel (PHP Framework)
- MySQL
- Javascript/Jquery
- HTML
- CSS

# Getting started

## Prerequisites

1. Php - I recommend installing [xampp](https://www.apachefriends.org/index.html) but you have other options on their [official website](https://www.php.net/manual/en/install.php)
2. Node/NPM - [Installing Node](https://nodejs.org/en/)

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)


Clone the repository

    git clone git@github.com:cristianCeamatu/aurasjobs.ro-laravel.git

Switch to the repo folder

    cd aurasjobs.ro-laravel

Install all the dependencies using composer

    composer install

Install all the javascript dependencies using npm

    npm install

Create the .env file by copying the example and your email account details in order to use the website forms

    cp .example.env .env

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

If you want to use the mail functionality on the forms run:

    cp .example.env .env

And then open .env and add you email account details.

**TL;DR command list**

```
    git clone git@github.com:cristianCeamatu/aurasjobs.ro-laravel.git
    cd aurasjobs.ro-laravel
    composer install
    npm install
    php artisan serve
```

## Authors

👤 **Cristian Viorel Ceamatu**

- Email: [cristian.ceamatu@gmail.com](cristian.ceamatu@gmail.com)
- Github: [https://github.com/cristianCeamatu](https://github.com/cristianCeamatu)
- Twitter: [https://twitter.com/CristianCeamatu](https://twitter.com/CristianCeamatu)
- Linkedin: [https://www.linkedin.com/in/ceamatu-cristian/](https://www.linkedin.com/in/ceamatu-cristian/)

## Show your support

Give a ⭐️ if you like this project!

## 📝 License

This project is [MIT](lic.url) licensed.
