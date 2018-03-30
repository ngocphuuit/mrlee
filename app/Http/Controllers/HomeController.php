<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Album;
use App\Models\Blog;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class HomeController extends BaseController
{
    public function index()
    {
    	$categories = Category::all();
		$blogs = Blog::where('top_flg', true)->orderBy('id', 'desc')->take(3)->get();
		$albums = Album::where('top_flg', true)->orderBy('id', 'desc')->take(5)->get();
    	return view('home', compact(
    		'blogs',
    		'albums',
    		'categories'
    	));
    }
}
