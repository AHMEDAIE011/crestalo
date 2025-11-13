<?php

namespace App\Providers;

use App\Models\OneCategory;
use App\Models\Post;
use App\Models\Category;
use App\Models\RelatedNewsSite;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        // share related sites
        $relatedSites = RelatedNewsSite::select('name', 'url')->get();
        $categories = Category::active()->select('id','slug', 'name','name_ar','desc','image')->get();
        $oneCategory = OneCategory::with(['categories'])->get();
        $posts = Post::active()->active()->with('images')->latest()->take(10)->get();

        view()->share([
            'relatedSites'=>$relatedSites,
            'categories'=>$categories,
            'oneCategory'=>$oneCategory,
            'posts'=>$posts,
        ]);
    }
}
