<?php

namespace App\Containers\AppSection\Blog\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Blog\Tasks\GetAllBlogsTask;
use App\Containers\AppSection\Blog\UI\API\Requests\GetAllBlogsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllBlogsAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllBlogsRequest $request): mixed
    {
        return app(GetAllBlogsTask::class)->run();
    }
}
