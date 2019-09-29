<?php

namespace App\Providers;

use App\Repositories\Contracts\CityInterface;
use App\Repositories\Contracts\StudentInterface;
use App\Repositories\Eloquent\CityEloquentRepository;
use App\Repositories\Eloquent\StudentEloquentRepository;
use App\Services\CityServicesInterface;
use App\Services\Implement\CityServices;
use App\Services\Implement\StudentServices;
use App\Services\StudentServicesInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            StudentInterface::class,
            StudentEloquentRepository::class
        );

        $this->app->singleton(
            StudentServicesInterface::class,
            StudentServices::class
        );

        $this->app->singleton(
            CityInterface::class,
            CityEloquentRepository::class
        );

        $this->app->singleton(
            CityServicesInterface::class,
            CityServices::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(
            StudentInterface::class,
            StudentEloquentRepository::class
            );

        $this->app->singleton(
            StudentServicesInterface::class,
            StudentServices::class
        );

        $this->app->singleton(
            CityInterface::class,
            CityEloquentRepository::class
        );

        $this->app->singleton(
            CityServicesInterface::class,
            CityServices::class
        );
    }
}
