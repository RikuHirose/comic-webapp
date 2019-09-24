<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // User
        $this->app->bind(
            \App\Repositories\UserRepositoryInterface::class,
            \App\Repositories\Eloquent\UserRepository::class
        );

        // Comic
        $this->app->bind(
            \App\Repositories\ComicRepositoryInterface::class,
            \App\Repositories\Eloquent\ComicRepository::class
        );

        // ComicApplication
        $this->app->bind(
            \App\Repositories\ComicApplicationRepositoryInterface::class,
            \App\Repositories\Eloquent\ComicApplicationRepository::class
        );

        // Application
        $this->app->bind(
            \App\Repositories\ApplicationRepositoryInterface::class,
            \App\Repositories\Eloquent\ApplicationRepository::class
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
