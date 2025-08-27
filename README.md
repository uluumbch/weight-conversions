# A simple PHP package for convert a weight

[![Latest Version on Packagist](https://img.shields.io/packagist/v/uluumbch/weight-conversions.svg?style=flat-square)](https://packagist.org/packages/uluumbch/weight-conversions)
[![Tests](https://img.shields.io/github/actions/workflow/status/uluumbch/weight-conversions/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/uluumbch/weight-conversions/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/uluumbch/weight-conversions.svg?style=flat-square)](https://packagist.org/packages/uluumbch/weight-conversions)

A simple PHP package for convert a weight.


## Installation

You can install the package via composer:

```bash
composer require uluumbch/weight-conversions
```

## Usage

```php
$convert = new Uluumbch\WeightConversions();
echo $convert->poundsToKilograms(1); // 0.45359237
echo $convert->kilogramsToPounds(1); // 2.204622621
echo $convert->gramsToOunces(1); // 0.0352739615
echo $convert->ouncesToGrams(1); // 28.349523125
echo $convert->stonesToPounds(1); // 14
echo $convert->poundsToStones(14); // 1
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Bachrul Uluum](https://github.com/uluumbch)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
