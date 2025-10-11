# Carbone.io wrapper for Laravel

This is a simple wrapper for [carbone.io](https://carbone.io), an advanced replacement for [dompdf](https://github.com/dompdf/dompdf).

## Installation

You can install the package via composer:

```bash
composer require beyto1974/carbone-laravel
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="carbone-laravel-config"
```

Set the following .env variables:
```bash
CARBONE_API_KEY=
CARBONE_BASE_URL=
```

## Usage

```php
use Beyto\CarboneLaravel\Facades\Carbone;

Carbone::getStatus()->json()
```

## Testing

If required to change the .env variables, copy phpunit.xml.dist to phpunit.xml and add at the end

```xml
<php>
    <env name="CARBONE_API_KEY" value="ABC123" />
    <env name="CARBONE_BASE_URL" value="https://an-other-server:4567" />
</php>
```

Run the tests:

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
