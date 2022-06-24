<?php

namespace App\Containers\AppSection\Blog\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Blog\Models\Blog;
use App\Containers\AppSection\Blog\Tasks\CreateBlogTask;
use App\Containers\AppSection\Blog\UI\API\Requests\CreateBlogRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateBlogAction extends ParentAction
{
    /**
     * @param CreateBlogRequest $request
     * @return Blog
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateBlogRequest $request): Blog
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateBlogTask::class)->run($data);
    }
}
