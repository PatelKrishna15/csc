<?php

namespace Nihirz\csc\Console\Commands;

use Illuminate\Console\Command;

class PublishPackageResources extends Command
{
    protected $signature = 'csc:publish';
    protected $description = 'Publishes package resources';

    public function handle()
    {
        // Publish files and directories
        $this->publishes([
            __DIR__.'/DataProviders' => base_path('app/DataProviders'),
            __DIR__.'/DataProviders' => base_path('app/DataProviders'),
            __DIR__.'/Models/Country.php' => app_path('Models/Country.php'),
            __DIR__.'/Models/State.php' => app_path('Models/State.php'),
            __DIR__.'/Models/City.php' => app_path('Models/City.php'),
            __DIR__.'/database/seeders/CountryStateCityTableSeeder.php' => base_path('database/seeders/CountryStateCityTableSeeder.php'),
            __DIR__.'/database/migrations/2023_12_14_000000_create_country_state_city_table.php' => base_path('database/migrations/2023_12_14_000000_create_country_state_city_table.php'),
            __DIR__.'/database/migrations/2023_12_18_161918_create_table_country_extra_table.php' => base_path('database/migrations/2023_12_18_161918_create_table_country_extra_table.php'),
        ], 'csc');

        $this->info('Package resources published successfully.');
    }
}