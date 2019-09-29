<?php

namespace App\Providers;

use App\Http\Repositories\Contract\CategoryRepositoryInterface;
use App\Http\Repositories\Eloquent\CategoryRepository;
use App\Http\Services\Impl\CategoryService;
use App\Http\Services\Intface\CategoryServiceInterface;
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
            CategoryRepositoryInterface::class,
            CategoryRepository::class
        );

        $this->app->singleton(
            CategoryServiceInterface::class,
            CategoryService::class
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
