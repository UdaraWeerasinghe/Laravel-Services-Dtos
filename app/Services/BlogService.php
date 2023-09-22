<?php

namespace App\Services;

use App\Dtos\BlogDto;
use App\Models\Blog;

class BlogService
{
    function store(BlogDto $dto)
    {
        return Blog::create([
            'title' => $dto->title,
            'content' => $dto->content,
            'image' => $dto->image
        ]);
    }
}
