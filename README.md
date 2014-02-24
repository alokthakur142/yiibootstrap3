# Yii Bootstrap3 Module Example
#### Version 0.0.8
### Code
[Demo][0]

[0]: http://bootstrap3.pascal-brewing.de

## Setup and first run

  * Set up Git by following the instructions [here](https://help.github.com/articles/set-up-git).
  * Update the configurations in `app/config/` to suit your needs. The `common/config/main.php` is configured to use **sqllite** by default. Change your `common/config/env/dev.php` to suit your database requirements.
  * Composer is required The package includes already a `composer.phar` file.
  * Browse through the `composer.json` and remove the dependencies you don't need also update the required versions of the extensions.
  * If you have `composer` installed globally:
	 * Run `composer self-update` to make sure you have the latest version of composer.
	 * Run `composer install` to download all the dependencies.
  * If you work the `composer.phar` library within the project boilerplate.
    * Run `php composer.phar self-update` to make sure you have the latest version of composer.
    * Run `php composer.phar install` to download all the dependencies.
  * `Yiinitializr\Composer\Callback` will configure everything required on your application: `runtime` and `assets` folders and migrations.


For more information about using Composer please see its [documentation](http://getcomposer.org/doc/).

###How to configure the application

We focused to release the pain of configuring your application and combine your configuration files. `Yiinitializr\Helpers\Initializr` is very easy to use, check for example the bootstrap `index.php` file:

```
require('./../app/lib/vendor/yiisoft/yii/framework/yii.php');

Yii::setPathOfAlias('Yiinitializr', './../app/lib/Yiinitializr');

use Yiinitializr\Helpers\Initializer;

Initializer::create('./../app', 'main', array('common', 'env', 'local'))->run();
```

For more information about Yiinitializr please check it at [its github repo](https://github.com/2amigos/yiinitializr).

## Overall Structure

Bellow the directory structure used:

```
   |-app
   |---cli
   |-----commands
   |-----migrations
   |---config
   |-----env
   |---controllers
   |---extensions
   |-----behaviors
   |-----components
   |---helpers
   |---lib #it will hold composer 'vendor' folder
   |-----Yiinitializr
   |-------Cli
   |-------Composer
   |-------Helpers
   |-------config
   |---messages
   |---models
   |---modules
   |---views
   |-----layouts
   |-----site
   |---widgets
   |-www
   |---css
   |-----fonts
   |---img
   |---js
   |-----libs
```
