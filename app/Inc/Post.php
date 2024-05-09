<?php

namespace App\Inc;

class Post
{
    public function boot()
    {
        // Register Post
        \App\Core\Post::registerPost([
            'name' => 'Books',
            'singular_name' => 'Book',
            'theme_name' => 'Codeflies',
            'post_type' => 'book',
            'rewrite_slug' => 'book',
            'menu_postion' => 2,
            'supporst' => ['title'],
            'menu_dashicon' => 'dashicons-welcome-write-blog'
        ]);

        \App\Core\Post::registerPost([
            'name' => 'Movie',
            'singular_name' => 'Movie',
            'theme_name' => 'Codeflies',
            'post_type' => 'movie',
            'rewrite_slug' => 'movie',
            'menu_postion' => 2,
            'supporst' => ['title'],
            'menu_dashicon' => 'dashicons-welcome-write-blog'
        ]);
        // Taxonomy 

        \App\Core\Post::setUpTaxonomy(['name' => 'Book Type', 'taxonomy' => 'book-type', 'post_type' => 'book']);
        \App\Core\Post::setUpTaxonomy(['name' => 'Book Category', 'taxonomy' => 'book-category', 'post_type' => 'book']);
    }
}
