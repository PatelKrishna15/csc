<?php

namespace Nihirz\csc\Console\Commands;

use Illuminate\Console\Command;

class PublishPackageResources extends Command
{
    protected $signature = 'csc:publish';
    protected $description = 'Publishes package resources';

    public function handle()
    {
        // Get package base path
        $packagePath = dirname(__DIR__, 2);

        // Publish files and directories
        $this->publishes([
            $packagePath . '/DataProviders' => base_path('app/DataProviders'),
            $packagePath . '/DataProviders' => base_path('app/DataProviders'),
            $packagePath . '/Models/Country.php' => app_path('Models/Country.php'),
            $packagePath . '/Models/State.php' => app_path('Models/State.php'),
            $packagePath . '/Models/City.php' => app_path('Models/City.php'),
            $packagePath . '/database/seeders/CountryStateCityTableSeeder.php' => base_path('database/seeders/CountryStateCityTableSeeder.php'),
            $packagePath . '/database/migrations/2023_12_14_000000_create_country_state_city_table.php' => base_path('database/migrations/2023_12_14_000000_create_country_state_city_table.php'),
            $packagePath . '/database/migrations/2023_12_18_161918_create_table_country_extra_table.php' => base_path('database/migrations/2023_12_18_161918_create_table_country_extra_table.php'),
        ], 'csc');

        $this->info('Package resources published successfully.');
    }
}