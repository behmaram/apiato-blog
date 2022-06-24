<?php

namespace App\Containers\AppSection\Blog\Actions;

use App\Containers\AppSection\Blog\Models\Blog;
use App\Containers\AppSection\Blog\Tasks\FindBlogByIdTask;
use App\Containers\AppSection\Blog\UI\API\Requests\FindBlogByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindBlogByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindBlogByIdRequest $request): Blog
    {
        return app(FindBlogByIdTask::class)->run($request->id);
    }
}
