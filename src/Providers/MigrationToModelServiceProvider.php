<?php
namespace noouh\MigrationToModel\Providers;

use Illuminate\Support\ServiceProvider;
use noouh\MigrationToModel\Commands\ConvertMigrationsCommand;

class MigrationToModelServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            ConvertMigrationsCommand::class,
        ]);
    }
}
