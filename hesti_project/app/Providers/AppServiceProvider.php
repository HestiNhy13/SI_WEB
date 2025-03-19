<?php

 use Intervention\Image\ImageManager;
 use Intervention\Image\Drivers\Gd\Driver;
 use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Route::middleware('api')
     ->prefix('api')
     ->group(base_path('routes/api.php'));
    }
}
