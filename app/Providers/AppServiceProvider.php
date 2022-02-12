<?php

namespace App\Providers;

use App\Interfaces\RepositoryInterfaces\PositionRepositoryInterface;
use App\Interfaces\PositionServiceInterface;
use App\Interfaces\RepositoryInterfaces\DepartmentRepositoryInterface;
use App\Interfaces\DepartmentServiceInterface;
use App\Repositories\DepartmentRepository;
use App\Repositories\EloquentDepartmentRepository;
use App\Repositories\PositionRepository;
use App\Services\DepartmentService;
use App\Services\PositionService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $singletons = [
        DepartmentServiceInterface::class => DepartmentService::class,
//        DepartmentRepositoryInterface::class => EloquentDepartmentRepository::class,
        DepartmentRepositoryInterface::class => DepartmentRepository::class,

        PositionServiceInterface::class => PositionService::class,
        PositionRepositoryInterface::class => PositionRepository::class,
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
