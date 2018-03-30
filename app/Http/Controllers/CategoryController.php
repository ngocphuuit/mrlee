<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Album;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CategoryController extends BaseController
{
    public function index()
    {
        $albums = Album::all();
        return view('categories.index', compact('albums'));
    }

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $albums = Album::where('category_id', $category->id)->get();
        return view('categories.show', compact('albums', 'category'));
    }
}
