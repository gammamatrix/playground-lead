# Playground Lead

[![Playground CI Workflow](https://github.com/gammamatrix/playground-lead/actions/workflows/ci.yml/badge.svg?branch=develop)](https://raw.githubusercontent.com/gammamatrix/playground-lead/testing/develop/testdox.txt)
[![Test Coverage](https://raw.githubusercontent.com/gammamatrix/playground-lead/testing/develop/coverage.svg)](tests)
[![PHPStan Level 9](https://img.shields.io/badge/PHPStan-level%209-brightgreen)](.github/workflows/ci.yml#L120)

The Playground Lead is a package for [Laravel](https://laravel.com/docs/11.x) applications.

This application provides the models to use the Playground Lead, a Campaign Sales Management tool.

Read more on using [Playground Lead at Read the Docs: Playground Documentation.](https://gammamatrix-playground.readthedocs.io/en/develop/components/leads.html)

## Installation

**NOTE:** This package is required by:
- [Playground Lead API](https://github.com/gammamatrix/playground-lead-api): API without UI
- [Playground Lead Resource](https://github.com/gammamatrix/playground-lead-resource): API with UI

Install this package, with composer, to get access to the Lead Models:

```bash
composer require gammamatrix/playground-lead
```

## `artisan:about`

Playground Lead provides information in the `artisan about` command.

<!-- <img src="resources/docs/artisan-about-playground-lead.png" alt="screenshot of artisan about command with Playground Lead."> -->

## Configuration

Migrations are disabled by default. This package may sometimes be installed where another system handles the migrations.

See the contents of the published config file: [config/playground-lead.php](config/playground-lead.php)

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Playground\Lead\ServiceProvider" --tag="playground-config"
```

### Environment Variables

|  env()                           | config()                         | Default |
|----------------------------------|----------------------------------|---------|
| `PLAYGROUND_LEAD_ABOUT`           | `playground-lead.about`           | `true`  |
| `PLAYGROUND_LEAD_LOAD_MIGRATIONS` | `playground-lead.load.migrations` | `false` |
- The loading option for migrations does not take effect if the migrations have been exported to your app. The control for loading is handled in the package [ServiceProvider.](src/ServiceProvider.php)

## Models

This package includes [factories](database/factories), models and [migrations](database/migrations) for:
- [Clients](src/Models/Client.php)
- [Contacts](src/Models/Contact.php)
- [Locations](src/Models/Location.php)
- [Organizations](src/Models/Organization.php)
- [Peoples](src/Models/People.php)

## Migrations

All migrations are disabled by default.

See the contents of the published config file: [database/migrations](database/migrations)
- NOTE: There are 4 tables that will be created, they do have indexes and unique constraints defined; however, this release does not have the foreign key constraint migrations included at this time.

You can publish the migrations file with:
```bash
php artisan vendor:publish --provider="Playground\Lead\ServiceProvider" --tag="playground-migrations"
```

## PHPStan

Tests at level 9 on:
- `config/`
- `database/`
- `src/`
- `tests/Feature/`
- `tests/Unit/`

```sh
composer analyse
```

## Coding Standards

```sh
composer format
```

## Testing

```sh
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Jeremy Postlethwaite](https://github.com/gammamatrix)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
