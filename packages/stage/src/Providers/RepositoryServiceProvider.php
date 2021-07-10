<?php

namespace Stage\Providers;

use Stage\Repositories\EnglishWordsRepositoryInterface;
use Stage\Repositories\StageRepositoryInterface;
use Stage\Repositories\MySQL\EnglishWordsMySQLRepository;
use Stage\Repositories\MySQL\StageMySQLRepository;

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
        $this->app->bind(StageRepositoryInterface::class, StageMySQLRepository::class);
        $this->app->bind(EnglishWordsRepositoryInterface::class, EnglishWordsMySQLRepository::class);
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
