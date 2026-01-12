<?php

namespace App\Providers;

use App\Models\Aspiration;
use App\Models\Category;
use App\Models\Ppdb;
use App\Models\Unit;
use App\Observers\AspirationObserver;
use App\Observers\CategoryObserver;
use App\Observers\PpdbObserver;
use App\Observers\UnitObserver;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Aspiration::observe(AspirationObserver::class);
        Category::observe(CategoryObserver::class);
        Unit::observe(UnitObserver::class);
        Ppdb::observe(PpdbObserver::class);
    }
}
