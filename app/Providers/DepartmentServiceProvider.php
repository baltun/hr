<?php

namespace App\Providers;

use App\Interfaces\DepartmentServiceInterface;
use App\Services\DepartmentService;
use Illuminate\Support\ServiceProvider;

class DepartmentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(DepartmentServiceInterface::class, DepartmentService::class);

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
