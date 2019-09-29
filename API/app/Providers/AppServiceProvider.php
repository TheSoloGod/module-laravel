<?php

namespace App\Providers;

use App\Http\Repositories\Contract\CustomerRepositoryInterface;
use App\Http\Repositories\Eloquent\CustomerEloquentRepository;
use App\Http\Services\Impl\CustomerServiceImpl;
use App\Http\Services\Intf\CustomerServiceInterface;
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
            CustomerRepositoryInterface::class,
            CustomerEloquentRepository::class
        );

        $this->app->singleton(
            CustomerServiceInterface::class,
            CustomerServiceImpl::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
