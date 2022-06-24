<?php

namespace App\Containers\AppSection\Blog\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Blog\Actions\UpdateBlogAction;
use App\Containers\AppSection\Blog\UI\API\Requests\UpdateBlogRequest;
use App\Containers\AppSection\Blog\UI\API\Transformers\BlogTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateBlogController extends ApiController
{
    /**
     * @param UpdateBlogRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateBlog(UpdateBlogRequest $request): array
    {
        $blog = app(UpdateBlogAction::class)->run($request);

        return $this->transform($blog, BlogTransformer::class);
    }
}
