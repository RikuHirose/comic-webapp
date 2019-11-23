<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \App\Helpers\CsvHelperInterface::class,
            \App\Helpers\Production\CsvHelper::class
        );

        $this->app->singleton(
            \App\Helpers\SeoHelperInterface::class,
            \App\Helpers\Production\SeoHelper::class
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
