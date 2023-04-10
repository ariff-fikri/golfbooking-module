
# Golf Booking Module

  

[![Latest Version on Packagist](https://img.shields.io/badge/packagist-dev--master-blue)](https://packagist.org/packages/nwidart/laravel-modules)

[![Total Downloads](https://img.shields.io/badge/downloads-7-green)](https://packagist.org/packages/nwidart/laravel-modules)

`cara/golfbooking-module` is a Laravel package which created to manage booking of a golf system on the `Cara/enviro` Laravel app. Module is just like a Laravel package, it has some views, controllers or models. This package is supported and tested in Laravel 8.

## Install
This package require another package to be installed. run the following command to install it first:
``` bash
composer require nwidart/laravel-modules
```

### Autoloading
By default, the module classes are not loaded automatically. You can autoload your modules using `psr-4` on your `composer.json`. For example:

``` json
{
	"autoload": {
		"psr-4": {
			"App\\": "app/",
			"Modules\\": "Modules/",
		}
}
```
Be sure to run this command afterwards:
``` bash
composer dump-autoload
```

After that install an additional composer plugin which will move the module files automatically:
``` bash
composer require joshbrw/laravel-module-installer
```

Then you can install through Composer, run the following command:
``` bash
composer require cara/golfbooking-module
```

Optionally, you can add a `DEFAULT_PASSWORD_SEEDER` in your `.env` for the general password to be seed in your database.

Run this command to enable the module:
``` bash
php artisan module:enable golfBooking 
```

Run this command to install all the dependencies needed for the module:
``` bash
php artisan command:initializeCommand
```
This command will automatically enable the module, publish it to the local project, migrate all the migrations inside the module, and also seed it.

Last thing, inside your project `config > auth.php` , change the `providers` array with the module's `User` model:
``` diff
'providers' => [
	'users' => [
		'driver' => 'eloquent',
-		'model' =>  User::class, // Remove this line
+		'model' =>  Modules\Golfbooking\Models\User::class, // Change it to this
	],
],
```

## Credits

- [Ariff Fikri](https://github.com/ariff-fikri)

- [Cara Com My](https://cara.com.my/cara-com-my/)

  

## About Ariff Fikri

  

Ariff Fikri is a senior web developer specialising on the Laravel framework. Visit [my website](https://ariff-fikri.com/).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
