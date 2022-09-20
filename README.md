# Ignition bridge

[![PHP Version Require](https://poser.pugx.org/spiral-packages/ignition-bridge/require/php)](https://packagist.org/packages/spiral-packages/ignition-bridge)
[![Latest Stable Version](https://poser.pugx.org/spiral-packages/ignition-bridge/v/stable)](https://packagist.org/packages/spiral-packages/ignition-bridge)
[![phpunit](https://github.com/spiral-packages/ignition-bridge/actions/workflows/phpunit.yml/badge.svg)](https://github.com/spiral-packages/ignition-bridge/actions)
[![psalm](https://github.com/spiral-packages/ignition-bridge/actions/workflows/static-analysis.yml/badge.svg)](https://github.com/spiral-packages/ignition-bridge/actions)
[![Codecov](https://codecov.io/gh/spiral-packages/ignition-bridge/branch/master/graph/badge.svg)](https://codecov.io/gh/spiral-packages/ignition-bridge)
[![Total Downloads](https://poser.pugx.org/spiral-packages/ignition-bridge/downloads)](https://packagist.org/packages/spiral-packages/ignition-bridge)
[![type-coverage](https://shepherd.dev/github/spiral-packages/ignition-bridge/coverage.svg)](https://shepherd.dev/github/spiral-packages/ignition-bridge)
[![psalm-level](https://shepherd.dev/github/spiral-packages/ignition-bridge/level.svg)](https://shepherd.dev/github/spiral-packages/ignition-bridge)

[Framework Bundle](https://github.com/spiral/framework)

## Requirements

Make sure that your server is configured with following PHP version and extensions:

- PHP 8.1+
- Spiral framework ^3.0



## Installation

You can install the package via composer:

```bash
composer require spiral-packages/ignition-bridge
```

After package install you need to register bootloader from the package.

```php
protected const LOAD = [
    // ...
    \Spiral\Ignition\Bootloader\IgnitionBootloader::class,
];
```

> **Note**
> If you are using [`spiral-packages/discoverer`](https://github.com/spiral-packages/discoverer),
> you don't need to register bootloader by yourself.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Aleksei Gagarin](https://github.com/spiral-packages)
- [All Contributors](../../contributors)

## License

MIT License (MIT). Please see [`LICENSE`](./LICENSE) for more information. Maintained by [Spiral Scout](https://spiralscout.com).
