<?php

namespace App\Providers;

use Faker\Factory;
use Faker\Generator;
use FakerSchools\Provider\en_US\Schools;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class FakerServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(Generator::class, function () {
            $faker = Factory::create();
            $faker->addProvider(new Schools($faker));
            return $faker;
        });
    }

    public function provides(): array
    {
        return [Generator::class];
    }
}