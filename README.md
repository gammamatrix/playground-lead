# Playground Leads

[![Playground CI Workflow](https://github.com/gammamatrix/playground-leads/actions/workflows/ci.yml/badge.svg?branch=develop)](https://raw.githubusercontent.com/gammamatrix/playground-leads/testing/develop/testdox.txt)
[![Test Coverage](https://raw.githubusercontent.com/gammamatrix/playground-leads/testing/develop/coverage.svg)](tests)
[![PHPStan Level 9](https://img.shields.io/badge/PHPStan-level%209-brightgreen)](.github/workflows/ci.yml#L120)

The Playground Leads is a package for [Laravel](https://laravel.com/docs/11.x) applications.

This application provides the models to use the Playground Leads, a Campaign Sales Management tool.

Read more on using [Playground Leads at Read the Docs: Playground Documentation.](https://gammamatrix-playground.readthedocs.io/en/develop/components/leads.html)

## Installation

**NOTE:** This package is required by:
- [Playground Leads API](https://github.com/gammamatrix/playground-leads-api): API without UI
- [Playground Leads Resource](https://github.com/gammamatrix/playground-leads-resource): API with UI

Install this package, with composer, to get access to the Leads Models:

```bash
composer require gammamatrix/playground-leads
```

## `artisan:about`

Playground Leads provides information in the `artisan about` command.

<!-- <img src="resources/docs/artisan-about-playground-leads.png" alt="screenshot of artisan about command with Playground Leads."> -->

## Configuration

Migrations are disabled by default. This package may sometimes be installed where another system handles the migrations.

See the contents of the published config file: [config/playground-leads.php](config/playground-leads.php)

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Playground\Leads\ServiceProvider" --tag="playground-config"
```

### Environment Variables

|  env()                           | config()                         | Default |
|----------------------------------|----------------------------------|---------|
| `PLAYGROUND_LEADS_ABOUT`           | `playground-leads.about`           | `true`  |
| `PLAYGROUND_LEADS_LOAD_MIGRATIONS` | `playground-leads.load.migrations` | `false` |
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
php artisan vendor:publish --provider="Playground\Leads\ServiceProvider" --tag="playground-migrations"
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
