# LaravelDot

Set and get array values via dot notation.

This library is a wrapper for Laravel around the php-dot library.

It makes accessible a facade 'Dot' to use the php-dot library.

## Installation

```composer require ronappleton/laravel-dot "v1.0"```

Laravel < 5.5 add ```RonAppleton\LaravelDot\ServiceProvider::class``` to your ```config/app.php``` file

Laravel > 5.5 the library is autoloaded.

Lumen add ```$app->register(RonAppleton\LaravelDot\ServiceProvider::class);``` to your ```bootstrap/app.php```

## Example Usage

Declare ```use RonAppleton\LaravelDot\Facade\Dot;``` at the top of your file.

Then:

```$value = Dot::get($array, 'key.to.your.value', $defaultValue);```

```$success = Dot::set($array, 'key.to.append.value', $value);```

Note: ```set``` accesses the array via reference and returns true on success.
