<?php

namespace App\Containers\AppSection\Blog\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Blog\Actions\FindBlogByIdAction;
use App\Containers\AppSection\Blog\UI\API\Requests\FindBlogByIdRequest;
use App\Containers\AppSection\Blog\UI\API\Transformers\BlogTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindBlogByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function findBlogById(FindBlogByIdRequest $request): array
    {
        $blog = app(FindBlogByIdAction::class)->run($request);

        return $this->transform($blog, BlogTransformer::class);
    }
}
