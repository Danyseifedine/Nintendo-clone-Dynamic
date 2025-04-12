<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Gate;
use Filament\Navigation\NavigationBuilder;
use Filament\Pages\Dashboard;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Filament::serving(function () {
            if (auth()->check() && !auth()->user()->hasPermissionTo('panel_access')) {
                abort(403, 'La. Mafik Mafik 😊');
            }
        });
    }
}
