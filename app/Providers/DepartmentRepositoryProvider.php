<?php

namespace App\Providers;

use App\Interfaces\DepartmentRepositoryInterface;
use App\Repositories\DepartmentRepository;
use Illuminate\Support\ServiceProvider;

class DepartmentProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(DepartmentRepositoryInterface::class, DepartmentRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
