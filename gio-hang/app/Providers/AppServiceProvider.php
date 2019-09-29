<?php

namespace App\Providers;

use App\Http\Repositories\Contracts\ProductRepositoryInterface;
use App\Http\Repositories\Contracts\RepositoryInterface;
use App\Http\Repositories\Eloquent\ProductEloquentRepository;
use App\Http\Repositories\Eloquent\RepositoryEloquent;
use App\Http\Services\Impl\ProductService;
use App\Http\Services\Intface\ProductServiceInterface;
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
            ProductRepositoryInterface::class,
            ProductEloquentRepository::class
        );

        $this->app->singleton(
            ProductServiceInterface::class,
            ProductService::class
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
