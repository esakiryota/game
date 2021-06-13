<?php

namespace App\Providers;

use App\Repositories\StageRepositoryInterface;
use App\Repositories\MySQL\StageMySQLRepository;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\MySQL\UserMySQLRepository;
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
        $this->app->bind(UserRepositoryInterface::class, UserMySQLRepository::class);
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
