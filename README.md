![banner](https://banners.beyondco.de/Laravel%20Trongate.png?theme=dark&packageManager=composer+require&packageName=shitware-ltd%2Flaravel-trongate&pattern=architect&style=style_1&description=A+Trongate+adapter+for+Laravel.&md=1&showWatermark=0&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg)

## Installation

```bash
composer require shitware-ltd/laravel-trongate
```

## Supported Laravel versions

We believe in backwards compatability just as much as Trongate, below are the supported Laravel versions.

- 7.x
- 8.x
- 9.x

## i18n

Supported languages:

- `en`
- `da`
- `nl`
- `dc`

## Configuration

To publish the configuration for the countdown, use the following command:

```bash
php artisan vendor:publish --provider="ShitwareLtd\LaravelTrongate\TrongateServiceProvider" --tag="config"
```

To publish translation files, use the following command:

```bash
php artisan vendor:publish --provider="ShitwareLtd\LaravelTrongate\TrongateServiceProvider" --tag="lang"
```

## License

MIT

## Issues

There ain't none due to our extexensive non test driven development approch. If you dont test, you dont have bugs!
