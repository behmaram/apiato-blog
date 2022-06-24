<?php

namespace App\Containers\AppSection\Blog\UI\API\Transformers;

use App\Containers\AppSection\Blog\Models\Blog;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class   BlogTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Blog $blog): array
    {
        $response = [
            'object' => $blog->getResourceKey(),
            'id' => $blog->getHashedKey(),
        ];

        return $this->ifAdmin([
            'real_id' => $blog->id,
            'created_at' => $blog->created_at,
            'updated_at' => $blog->updated_at,
            'readable_created_at' => $blog->created_at->diffForHumans(),
            'readable_updated_at' => $blog->updated_at->diffForHumans(),
            // 'deleted_at' => $blog->deleted_at,
        ], $response);
    }
}
