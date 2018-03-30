<?php

// Home
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('Home', url('/'));
});

// Home > About
// Breadcrumbs::register('about', function ($breadcrumbs) {
//     $breadcrumbs->parent('home');
//     $breadcrumbs->push('About', route('about'));
// });

// // Home > Blog
// Breadcrumbs::register('blog', function ($breadcrumbs) {
//     $breadcrumbs->parent('home');
//     $breadcrumbs->push('Blog', route('blog'));
// });

// Home > Blog > [Category]
Breadcrumbs::register('categories', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Category', url('/category'));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::register('category', function ($breadcrumbs, $category) {
    $breadcrumbs->parent('categories');
    $breadcrumbs->push($category->name, url('/category/' . $category->slug));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::register('album', function ($breadcrumbs, $category, $album) {
    $breadcrumbs->parent('category', $category);
    $breadcrumbs->push($album->title, url('/category/' . $category->slug . '/album' . $album->id));
});