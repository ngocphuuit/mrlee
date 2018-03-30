<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BlogController extends BaseController
{
    public function index()
    {
        $blogs = Blog::paginate(5);
        $categories = Category::all();
        $recent_blogs = Blog::all()
                            ->sortByDesc('id')
                            ->take(3);
    	return view('blogs.index', compact(
            'blogs',
            'categories',
            'recent_blogs'
        ));
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        $categories = Category::all();
        $recent_blogs = Blog::all()
                            ->sortByDesc('id')
                            ->take(3);
    	return view('blogs.show', compact(
            'blog',
            'categories',
            'recent_blogs'
        ));
    }

    public function navigation()
    {
    	return 1;
    }
}
