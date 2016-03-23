## Promethia Minecraft

This is the backend code that runs the Promethia Minecraft website using the [Laravel](http://github.com/laravel/framework) framework version 4.2.
Although much of this application is self-contained, it is not currently designed to be executed on other systems.

### License

This code is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

### What's included?

This current bundle includes both a majority of the bootstrap front-end and backend of the website.
In future versions these most likely will be bundled seperately in order to allow for customization of the site's themes.

### Dependencies

#### Backend

Currently Promethia uses various services and dependencies to outsource some of the workload.
Since this system is currently specifically designed for Promethia's systems, the current configuration in the `env.php` file at this time only allows for use of these driver dependencies.
These settings can be overwritten in the `app/config` directory using Laravel's settings.
Notice, changes to these files will be overwritten during updates.
A fix to this is expected later.

+ **[Mailgun](http://www.mailgun.com/)** - A service used to dispatch user emails, account required (Free).
+ **[Minify](https://github.com/ceesvanegmond/minify)** - Included in installation, minimizes CSS and JavaScript files.

#### Frontend

There are a few icon font libraries and JavaScript files not included in the source, these are listed below.

+ **[WOW.js](http://mynameismatthieu.com/WOW/)** - Animates content as you scroll.
+ **[Font Awesome](http://fontawesome.io)** - Icon font.
+ **[Helium Icon Font](http://tympanus.net/codrops/2014/10/10/freebie-helium-icon-set/)** - Icon font.
+ **[Free Line-Style Icon Font](http://www.elegantthemes.com/blog/freebie-of-the-week/free-line-style-icons)** - Icon font.
+ **[The Elegant Icon Font](http://www.elegantthemes.com/blog/resources/elegant-icon-font)** - Icon font.
+ **[Ionicons](http://ionicons.com/)** - Icon font.
+ **[Octicons](https://octicons.github.com/)** - Icon font.

### Plugin Configurations

Promethia Minecraft has some plugin dependencies that will be included here in future updates.

### Installation

This is a work in progress, however it only shows the current steps to features that are developed already.

+ Clone the files to your working directory.
+ Ensure you have the latest version of [Composer](https://getcomposer.org/) installed inside your working directory.
+ Execute this command to install the latest versions of all dependencies.
```
php composer.phar update
``` 
+ A file named `env.php` contains a sample configuration. Change the specifications as necesary.
+ Rename `env.php` to `.env.php`. This file will not update automatically with future updates.
+ Execute this command to run your initial database migration.
```
php artisan migrate
```
+ Execute this command to populate your database with some basic content.
```
php artisan db:seed
```
+ Point your domain to the `public` directory.

+ Execute this command to optimize classes for quicker load times. If debug mode is enabled, add the `--force` flag.
```
php artisan optimize
```

### Updates

Currently everything is in development and may change at any moment, consider all commits that are not a release unstable.
As this system is living, and evolving, the process to update may change so refer here for every update.
An update will cause some web downtime for the server, including commands that are to the website.
Informing users of this often quick downtime in advance is highly suggested.

+ Execute this command to put the website in maintenance mode.
```
php artisan down
```
+ Pull/merge the updated version via Git.

+ Open the `env.php` file and make any changes to the `.env.php` file to match the configuration.

+ Execute this command to run a database migration.
```
php artisan migrate
```
+ Execute this command to optimize classes for quicker load times. If debug mode is enabled, add the `--force` flag.
```
php artisan optimize
```
+ Execute this command to take the website out of maintenance mode.
```
php artisan up
```

### Troubleshooting

**Errors with migration resets/rollbacks?**
Try this command.
```
php composer.phar dump-autoload
```

**Errors with class optimization?**
Try this command before optimizing.
```
php artisan clear-compiled
```

### Contributing

Please submit all issues and pull requests to the [Promethia/Web](http://github.com/promethia/web) repository!