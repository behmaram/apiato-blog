<?php

namespace App\Containers\AppSection\Blog\UI\API\Controllers;

use App\Containers\AppSection\Blog\Actions\DeleteBlogAction;
use App\Containers\AppSection\Blog\UI\API\Requests\DeleteBlogRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteBlogController extends ApiController
{
    /**
     * @param DeleteBlogRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function deleteBlog(DeleteBlogRequest $request): JsonResponse
    {
        app(DeleteBlogAction::class)->run($request);

        return $this->noContent();
    }
}
