<?php

namespace App\Providers;

use App\Http\Controllers\UserController;
use App\Models\Client;
use App\Models\Revenue;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer(['layout.header'], function ($view) {
            $services = Service::all();
            $profits = Revenue::getProfits();
            $clients = Client::where(['type' => 'client'])->get();

            $view->with(['services' => $services, 'profits' => $profits, 'clients' => $clients]);
        });




        Gate::define('users.edit', [UserController::class, 'edit']);
    }
}
