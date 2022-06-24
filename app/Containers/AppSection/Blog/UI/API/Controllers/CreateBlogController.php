<?php

namespace App\Containers\AppSection\Blog\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Blog\Actions\CreateBlogAction;
use App\Containers\AppSection\Blog\UI\API\Requests\CreateBlogRequest;
use App\Containers\AppSection\Blog\UI\API\Transformers\BlogTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateBlogController extends ApiController
{
    /**
     * @param CreateBlogRequest $request
     * @return JsonResponse
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function createBlog(CreateBlogRequest $request): JsonResponse
    {
        $blog = app(CreateBlogAction::class)->run($request);

        return $this->created($this->transform($blog, BlogTransformer::class));
    }
}
