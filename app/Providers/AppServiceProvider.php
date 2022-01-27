<?php

namespace App\Providers;

use App\Interfaces\DepartmentRepositoryInterface;
use App\Interfaces\DepartmentServiceInterface;
use App\Repositories\DepartmentRepository;
use App\Repositories\EloquentDepartmentRepository;
use App\Services\DepartmentService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $singletons = [
        DepartmentServiceInterface::class => DepartmentService::class,
        DepartmentRepositoryInterface::class => EloquentDepartmentRepository::class,
    ];
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
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
