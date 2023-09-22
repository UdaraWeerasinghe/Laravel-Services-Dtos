<?php

namespace App\Dtos;

use App\Http\Requests\BlogRequest;

class BlogDto
{
    public function __construct(
        public readonly string $title,
        public readonly string $content,
        public readonly null|string $image
    ) {
    }

    public static function fromRequest(BlogRequest $request)
    {
        return new self(
            title: $request->validated('title'),
            content: $request->validated('content'),
            image: $request->validated('image')
        );
    }
}
