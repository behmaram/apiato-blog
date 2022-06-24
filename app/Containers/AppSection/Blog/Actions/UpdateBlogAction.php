<?php

namespace App\Containers\AppSection\Blog\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Blog\Models\Blog;
use App\Containers\AppSection\Blog\Tasks\UpdateBlogTask;
use App\Containers\AppSection\Blog\UI\API\Requests\UpdateBlogRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateBlogAction extends ParentAction
{
    /**
     * @param UpdateBlogRequest $request
     * @return Blog
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateBlogRequest $request): Blog
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateBlogTask::class)->run($data, $request->id);
    }
}
