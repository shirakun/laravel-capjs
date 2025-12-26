# Laravel Cap.js

[![Latest Version on Packagist](https://img.shields.io/packagist/v/shirakun/laravel-capjs.svg?style=flat-square)](https://packagist.org/packages/shirakun/laravel-capjs)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/shirakun/laravel-capjs/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/shirakun/laravel-capjs/actions?query=workflow%3Arun-tests+branch%3Amain)

__Laravel Cap.js__, is a package to help you implement [cap.js (CAP Worker Service)](https://captcha.gurl.eu.org/) easily.

## Installation

You can install the package via composer:

```bash
composer require shirakun/laravel-capjs
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="capjs-config"
```

This is the contents of the published config file:

```php
return [
    /*
    |--------------------------------------------------------------------------
    | Cap.js Keys
    |--------------------------------------------------------------------------
    |
    | This value is the site, and the secret key of your application.
    | Cap.js might not require these by default, but they are available
    | for custom worker endpoints.
    |
    */
    'capjs_site_key' => env('CAPJS_SITE_KEY', null),

    'capjs_secret_key' => env('CAPJS_SECRET_KEY', null),

    'capjs_api_endpoint' => env('CAPJS_API_ENDPOINT', 'https://captcha.gurl.eu.org/api/validate'),

    /*
    |--------------------------------------------------------------------------
    | Error Messages
    |--------------------------------------------------------------------------
    |
    | Here you can find the error messages for the application. You can modify
    | or translate the error message as you like.
    |
    */
    'error_messages' => [
        'capjs_check_message' => 'The CAPTCHA thinks you are a robot! Please refresh and try again.',
    ],
];
```

## Usage

### Cap.js Widget Component

Once you require this package, you can use the capjs widget in your form, like the following:

```blade
<x-capjs-widget 
    theme="light"
    size="normal"
    shape="square"
    elevation="flat"
/>
```

### Cap.js Backend Validation

Once you use the widget component in the frontend, you can validate the Cap.js response by using the `validate` method.

Here's an example:

```php
use Shirakun\LaravelCapjs\Facades\LaravelCapjs;

public function store(Request $request)
{
    $response = LaravelCapjs::validate();

    if (! $response['success']) {
        // do your logic
    }
}
```

You may, optionally, send the token with the validation method:

```php
public function store(Request $request)
{
    $response = LaravelCapjs::validate(
        $request->get('cap-token');
    );
}
```

### Cap.js Custom Rule

If you want clean validation, you can use the `CapjsCheck` custom rule:

```php
use Shirakun\LaravelCapjs\Rules\CapjsCheck;

public function store(Request $request)
{
    $request->validate([
        'cap-token' => [new CapjsCheck()]
    ]);
}
```

## Credits

- [ousid](https://github.com/ousid)
- [cap.js](https://captcha.gurl.eu.org/)

## License

The MIT License (MIT). Please see [the License File](LICENSE.md) for more information.
