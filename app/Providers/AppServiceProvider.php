<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Database\Schema\Builder;
use Illuminate\Support\Facades\View;
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
        View::share('categories', $categories);
        Builder::defaultStringLength(191);
    }
}
