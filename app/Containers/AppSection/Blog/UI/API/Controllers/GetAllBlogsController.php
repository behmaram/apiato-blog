<?php

namespace App\Containers\AppSection\Blog\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Blog\Actions\GetAllBlogsAction;
use App\Containers\AppSection\Blog\UI\API\Requests\GetAllBlogsRequest;
use App\Containers\AppSection\Blog\UI\API\Transformers\BlogTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllBlogsController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllBlogs(GetAllBlogsRequest $request): array
    {
        dd('asf');
        $blogs = app(GetAllBlogsAction::class)->run($request);

        return $this->transform($blogs, BlogTransformer::class);
    }
}
