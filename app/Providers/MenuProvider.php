<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MenuProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->getMenu();
    }
    private function getMenu(){
        \View::composer('layout.main', function ($view) {
            $view->with('menu', \View('layout.menubar'));
        });
    }
}
