(early build, some bugs and ugly stuff might be in there..)

## Laravel - Materialize

Laravel 5 comes with Twitter Bootstrap which is a great framework. But we developers love trying out the new things right?
So [Materialize](http://materializecss.com/) is a cool, upcoming front-end framework that use the Google Material design in its core.
My mission is to make a plattform with Laravel and use Materialize as the front-end framework.

This is supposed to be a repo that can kickstart a project where you want to combine the two.

### Laravel Documentation

Documentation for the Laravel framework can be found on the [Laravel website](http://laravel.com/docs).

### Materialize Documentation

Documentation for the Materialize framework can be found on the [Materialize website](http://materializecss.com/).

### Installation:

- `composer install`
- `npm install`
- Create .env file (from the .env.example)
- `php artisan key:generate`
- `php artisan migrate`
- run `gulp` or `gulp watch` (Install gulp (sudo npm install -g gulp) if needed)

### Contributing

I would enjoy your thoughts on how to build on this repo. Would you like to have a bigger template? Maybe add some admin stuff?
This repo is right now in its early days.

Known issues/bugs right now:
* I dont get the font material-design-icons to work. Therefore I use font.google....



#### Special thanks to [ @rappasoft ] (https://github.com/rappasoft)

This project is inspired by your way of extracting blade partials.
When I want to use Laravel with Bootstrap I use his juicy [laravel-5-boilerplate] (https://github.com/rappasoft/laravel-5-boilerplate) which conain a strong frontend / backend structure.
