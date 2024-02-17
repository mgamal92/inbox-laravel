<?php

namespace MG\Inbox;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use MG\Inbox\Commands\InboxCommand;

class InboxServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-inbox')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-inbox_table')
            ->hasCommand(InboxCommand::class);
    }
}