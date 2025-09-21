# Playground: Lead

[![Playground CI Workflow](https://github.com/gammamatrix/playground-lead/actions/workflows/ci.yml/badge.svg?branch=develop)](https://raw.githubusercontent.com/gammamatrix/playground-lead/testing/develop/testdox.txt)
[![Test Coverage](https://raw.githubusercontent.com/gammamatrix/playground-lead/testing/develop/coverage.svg)](tests)
[![PHPStan Level 10](https://img.shields.io/badge/PHPStan-level%2010-brightgreen)](.github/workflows/ci.yml#L128)

The Playground Lead is a package for [Laravel](https://laravel.com/docs/12.x) applications.

Playground: Provides the models for the Playground Campaign and Lead Sales Management tool.

Read more on using [Playground: Lead at Read the Docs](https://gammamatrix-playground.readthedocs.io/en/develop/built-components/lead.html)

## Installation

**NOTE:** This package is required by:
- [Playground: Lead API](https://github.com/gammamatrix/playground-lead-api): API without UI
- [Playground: Lead Resource](https://github.com/gammamatrix/playground-lead-resource): API with UI

Install this package, with composer, to get access to the Lead Models:

```bash
composer require gammamatrix/playground-lead
```

## `artisan:about`

Playground Lead provides information in the `artisan about` command.

<img src="resources/docs/artisan-about-playground-lead.png" alt="screenshot of artisan about command with Playground: Lead.">

## Configuration

Migrations are disabled by default. This package may sometimes be installed where another system handles the migrations.

See the contents of the published config file: [config/playground-lead.php](config/playground-lead.php)

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Playground\Lead\ServiceProvider" --tag="playground-config"
```

### Environment Variables

| env()                                | config()                         | Default |
|--------------------------------------|----------------------------------|---------|
| `PLAYGROUND_LEAD_ABOUT`           | `playground-lead.about`           | `true`  |
| `PLAYGROUND_LEAD_LOAD_MIGRATIONS` | `playground-lead.load.migrations` | `false` |
- The loading option for migrations does not take effect if the migrations have been exported to your app. The control for loading is handled in the package [ServiceProvider.](src/ServiceProvider.php)

## Models

This package includes [factories](database/factories), models and [migrations](database/migrations) for:
- [Campaign](src/Models/Campaign.php)
- [Goal](src/Models/Goal.php)
- [Lead](src/Models/Lead.php)
- [Opportunity](src/Models/Opportunity.php)
- [Plan](src/Models/Plan.php)
- [Region](src/Models/Region.php)
- [Report](src/Models/Report.php)
- [Source](src/Models/Source.php)
- [Task](src/Models/Task.php)
- [Team](src/Models/Team.php)
- [Teammate](src/Models/Teammate.php)

## Migrations

All migrations are disabled by default.

See the contents of the published config file: [database/migrations](database/migrations)
- NOTE: There are 11 tables that will be created, they do have indexes and unique constraints defined; however, this release does not have the foreign key constraint migrations included at this time.

You can publish the migrations file with:
```bash
php artisan vendor:publish --provider="Playground\Lead\ServiceProvider" --tag="playground-migrations"
```

## Cloc

```sh
composer cloc
```

```
➜  playground-lead git:(develop) ✗ composer cloc
     139 text files.
     135 unique files.
      17 files ignored.

github.com/AlDanial/cloc v 2.06  T=0.07 s (1866.5 files/s, 753797.3 lines/s)
-------------------------------------------------------------------------------
Language                     files          blank        comment           code
-------------------------------------------------------------------------------
JSON                            64              0              0          42289
PHP                             63            850           2629           8059
YAML                             1              5              0            275
XML                              3              0              7            218
Markdown                         3             46              0            127
INI                              1              3              0             12
-------------------------------------------------------------------------------
SUM:                           135            904           2636          50980
-------------------------------------------------------------------------------
```

## PHPStan

Tests at level 10 on:
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

Unit tests
```sh
composer test
```

Unit and feature tests
```sh
composer test-dev
```

Run unit and feature tests in parallel:
```sh
composer test-parallel
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Jeremy Postlethwaite](https://github.com/gammamatrix)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
