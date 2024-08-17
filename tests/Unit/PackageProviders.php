<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Tests\Unit\Playground\Lead;

/**
 * \Tests\Unit\Playground\Lead\PackageProviders
 */
trait PackageProviders
{
    protected string $package_providers_dir = __DIR__;

    protected function getPackageProviders($app)
    {
        return [
            \Playground\ServiceProvider::class,
            \Playground\Lead\ServiceProvider::class,
        ];
    }
}
