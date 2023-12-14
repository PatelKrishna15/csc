<?php

namespace Nihirz\csc;

use Illuminate\Support\ServiceProvider;
use Database\Seeders\CountryStateCityTableSeeder;
class CSCServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/DataProviders' => base_path('app/DataProviders'),
            __DIR__.'/Models/Country.php' => app_path('Models/Country.php'),
            __DIR__.'/Models/State.php' => app_path('Models/State.php'),
            __DIR__.'/Models/City.php' => app_path('Models/City.php'),
            __DIR__.'/database/seeders/CountryStateCityTableSeeder.php' => base_path('database/seeders/CountryStateCityTableSeeder.php'),
            __DIR__.'/database/migrations/2023_12_14_000000_create_country_state_city_table.php' => base_path('database/migrations/2023_12_14_000000_create_country_state_city_table.php'),
        ]);
    }
    
    public function register()
    {
        
    }
}