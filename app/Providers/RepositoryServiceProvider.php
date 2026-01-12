<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $path = app_path('Contracts/Repositories');

        foreach (glob($path.'/*RepositoryInterface.php') as $file) {
            $interface = 'App\\Contracts\\Repositories\\'.basename($file, '.php');
            $implementation = 'App\\Repositories\\'.str_replace(
                'Interface',
                '',
                basename($file, '.php')
            );

            if (class_exists($interface) && class_exists($implementation)) {
                $this->app->bind($interface, $implementation);
            }
        }
    }
}
