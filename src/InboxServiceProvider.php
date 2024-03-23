<?php

namespace MG\Inbox;

use MG\Inbox\Commands\InboxCommand;
use MG\Inbox\Services\InboxRepository;
use MG\Inbox\Services\InboxService;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasMigration('create_laravel-inbox_table')
            ->hasCommand(InboxCommand::class);
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->publishes([
            __DIR__.'/../config/inbox.php' => config_path('inbox.php'),
        ], 'config');
    }

    public function register()
    {
        $this->app->singleton('inbox', function ($app) {
            return new InboxService($app->make(InboxRepository::class));
        });
    }
}
