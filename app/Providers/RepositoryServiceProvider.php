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
        // Abstract
        $this->app->bind(
            \App\Repositories\AbstractRepositoryInterface::class,
            \App\Repositories\Eloquent\AbstractRepository::class
        );

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

        // Review
        $this->app->bind(
            \App\Repositories\ReviewRepositoryInterface::class,
            \App\Repositories\Eloquent\ReviewRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
