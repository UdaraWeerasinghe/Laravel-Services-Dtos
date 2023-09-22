<?php

namespace App\Services;

use App\Models\Blog;

class BlogService
{
    function store($title, $content, $image){
        return Blog::create([
            'title' => $title,
            'content' => $content,
            'image' => $image
        ]);
        
    }
}
