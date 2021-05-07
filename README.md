# Collections of Path generators for Spatie laravel-medialibrary package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/comotic/laravel-medialibrary-generators.svg?style=flat-square)](https://packagist.org/packages/comotic/laravel_medialibrary_generators)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/comotic/laravel-medialibrary-generators/run-tests?label=tests)](https://github.com/comotic/laravel-medialibrary-generators/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/comotic/laravel-medialibrary-generators/Check%20&%20fix%20styling?label=code%20style)](https://github.com/comotic/laravel-medialibrary-generators/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/comotic/laravel-medialibrary-generators.svg?style=flat-square)](https://packagist.org/packages/comotic/laravel_medialibrary_generators)

This is where your description should go. Try and limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require comotic/laravel-medialibrary-generators
```

## Usage

If you haven't already done that, you must publish laravel-medialibray config file:
```bash
php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="config"
```

Then choose the generator that fits your needs and update the `path_generator` key of the config file.

That's it, profit!

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

- [Nicolas Perraut](https://github.com/tuarrep)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
