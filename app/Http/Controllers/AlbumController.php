<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Album;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AlbumController extends BaseController
{
    public function show($slug, $id)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $album = Album::where('category_id', $category->id)
                        ->where('id', $id)->firstOrFail();
        return view('albums.show', compact('album', 'category'));
    }
}
