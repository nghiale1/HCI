<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Genre;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $category = Category::all();
        foreach ($category as $cate) {
            $genre[$cate->category_id] = Genre::where('category_id', $cate->category_id)->get();
        }

        return view()->Share(['category' => $category, 'genre' => $genre]);
    }
}
