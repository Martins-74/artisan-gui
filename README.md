# Artisan GUI
Artisan GUI is a Laravel Graphic User Interface for Artisan Comands. (Works on Live Servers with out SSH).

Artisan GUI is able to run when Laravel is in maintence mode, letting you executing commands with out harming your users.

![enter image description here](http://i.imgur.com/g3K9nt7.png)


----------

# Installation

Execute the following command on **Composer** to start downloading and installing.

	composer require martins-74/artisan-gui:dev-master

Once Artisan GUI is installed, you need to register a Laravel service provider, in your config/app.php:

```php
    'providers' => [
		...
		Martins\ArtisanGUI\ArtisanGUIServiceProvider::class,
	]
```

Now we need to publish the configurations, we do this by executing:

	php artisan vendor:publish


The last thing to do is to add a new line in the .env file, the password:

	Martins_GUI=wellthisisthesafestpassword

> **Tip:** Artisan GUI only works when Laravel is in Debug Mode for security reasons so be sure that APP_DEBUG is set to true .
"APP_DEBUG=true"

That's it know navigate to www.yoursite.com/artisan-gui



----------


# List of Commands
> **Note:**
> 
> - Can't find a command? Enter in contact with me and i'll see if it's possible to add it.

	php artisan make:controller;
	php artisan make:migration;
	php artisan make:model;
	php artisan make:mail;
	php artisan make:command;
	php artisan make:seed;
	
	php artisan migrate;
	php artisan migrate:refresh;
	php artisan migrate:install;
	
	php artisan queue:table;
	php artisan queue:restart;
	php artisan queue:work;
	
	php artisan db:seed;
	
	php artisan schedule:run;
	
	php artisan vendor:publish;
	
	php artisan storage:link;
	
	php artisan down;
	
	php artisan up;
	
	php artisan cache:clear;
