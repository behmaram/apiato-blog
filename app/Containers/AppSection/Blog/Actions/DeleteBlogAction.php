<?php

namespace App\Containers\AppSection\Blog\Actions;

use App\Containers\AppSection\Blog\Tasks\DeleteBlogTask;
use App\Containers\AppSection\Blog\UI\API\Requests\DeleteBlogRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteBlogAction extends ParentAction
{
    /**
     * @param DeleteBlogRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteBlogRequest $request): int
    {
        return app(DeleteBlogTask::class)->run($request->id);
    }
}
