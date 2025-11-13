<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Category;
use App\Models\HeaderImage;
use App\Models\OneCategory;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
    //     $OneCategory = OneCategory::with(['categories'])->get();
    //    return $allCategories = $OneCategory->pluck('categories')->flatten();


        // $gretest_posts_views = Post::active()->orderBy('num_of_views', 'desc')->limit(3)->get();
        // $oldest_news = Post::active()->oldest()->take(3)->get();

        // $gretest_posts_comments = Post::active()->withCount('comments')
        //     ->orderBy('comments_count', 'desc')
        //     ->take(3)
        //     ->get();

        // $categories = Category::has('posts' , '>=' , 2)->active()->get();
        // $categories_with_posts = $categories->map(function($category){
        //     $category->posts = $category->posts()->active()->limit(4)->get();
        //     return $category;
        // });
        $header_images = HeaderImage::get();
        $team= Team::where('show','=',1)->get();

        return view('front.index', compact(
              'header_images',
              'team',
            ));
    }

    public function about()
    {
        $team= Team::where('show','=',1)->get();

        return view('front.about' ,compact(
              'team',
            ));
    }

    public function faq()
    {

        return view('front.faq' );
    }
        public function team()
    {
        $team= Team::all();

        return view('front.team' ,compact(
              'team',
            ));
    }

}
