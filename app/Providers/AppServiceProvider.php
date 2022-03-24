<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Category;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
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
        $categories = Category::with(['media', 'subCategories.category'])->get();
        view()->share('categories', $categories);
    }
}
