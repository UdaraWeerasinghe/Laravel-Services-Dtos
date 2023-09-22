<?php

namespace App\Http\Controllers;

use App\Dtos\BlogDto;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Services\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function __construct(
        protected BlogService $service,
    ) {
    }

    public function store(BlogRequest $request)
    {
        $post = $this->service->store(BlogDto::fromRequest($request));

        return $post;
    }

}
