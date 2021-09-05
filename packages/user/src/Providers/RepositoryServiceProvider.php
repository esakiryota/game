<?php

namespace User\Providers;

use User\Repositories\UserRepositoryInterface;
use User\Repositories\MySQL\UserMySQLRepository;
use User\Repositories\SkillsRepositoryInterface;
use User\Repositories\MySQL\SkillsMySQLRepository;

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
        $this->app->bind(UserRepositoryInterface::class, UserMySQLRepository::class);
        $this->app->bind(SkillsRepositoryInterface::class, SkillsMySQLRepository::class);
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
