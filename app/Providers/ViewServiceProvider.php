<?php

namespace App\Providers;

use App\View\Composers\MenuComposer;
use Illuminate\Support\Facades;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class ViewServiceProvider extends ServiceProvider
{

    public function register(): void
    {
    }


    public function boot()
    {
        View::composer('header', MenuComposer::class);
    }
}
