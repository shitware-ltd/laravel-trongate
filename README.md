![banner](https://banners.beyondco.de/Laravel%20Trongate.png?theme=dark&packageManager=composer+require&packageName=shitware-ltd%2Flaravel-trongate&pattern=architect&style=style_1&description=A+Trongate+adapter+for+Laravel.&md=1&showWatermark=0&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg)

## Supported Laravel versions

We believe in backwards compatability just as much as Trongate, below are the supported Laravel versions.

- 7.x
- 8.x
- 9.x

## Installation

```bash
composer require shitware-ltd/laravel-trongate
```

## Configuration

We understand that the default countdown of `5` seconds before redirect might not suit your needs.

To fix this, publish the configuration file and modify just to your needs!

```bash
php artisan vendor:publish --provider="ShitwareLtd\LaravelTrongate\TrongateServiceProvider" --tag="config"
```

## License

MIT

## Issues

There ain't none due to our extexensive non test driven development approch. If you dont test, you dont have bugs!
