# barebone

Basic MVC Framework for building modern PHP web applications.


## At a glance

#### Configuration

Setup your application details and database connection `config.json`

#### Models

Define your models as needed in `/app/classes/Model`

#### Controllers

Write your controller actions in `/app/classes/Controller`

#### Views

Add as many views as referenced in your controllers in `/app/views`

#### Routing

Connect your controller actions to urls in `routes.php`

#### Logging

You can write from models and controllers to a log in `/app/logs/`

#### Assets

Get gulp with "npm install" in `/app/`, comes preconfigured for SASS and JS

#### Javascript

Develop your frontend code `/app/js` supported by Browserify and Babel. 

#### Stylesheets

By default SASS renders to CSS from `/app/sass`, but LESS is also available.

#### Hosting

Upload everything to Server with at least PHP 5.5 and point your virtual host to `/public/`

## Status

This is work in progress. Tests are on the way and the API may change (slightly).
At this point i don't expect any drastic changes anymore.

## Contributing

Any PR is welcome. If you find issues, please report.

## License 

The MIT License

