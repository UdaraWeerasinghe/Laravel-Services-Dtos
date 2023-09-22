<?php

namespace App\Http\Controllers;

use App\Dtos\BlogDto;
use App\Http\Requests\BlogRequest;
use App\Http\Resources\Blog\BlogCollection;
use App\Http\Resources\Blog\BlogResource;
use App\Models\Blog;
use App\Services\BlogService;

class BlogController extends Controller
{

    public function __construct(
        protected BlogService $service,
    ) {
    }

    public function index()
    {
        return new BlogCollection(Blog::all());
    }

    public function store(BlogRequest $request)
    {
        $blog = $this->service->store(BlogDto::fromRequest($request));

        return new BlogResource($blog);
    }
}
