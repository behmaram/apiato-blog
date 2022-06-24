<?php

namespace App\Containers\AppSection\Blog\Tasks;

use App\Containers\AppSection\Blog\Data\Repositories\BlogRepository;
use App\Containers\AppSection\Blog\Events\BlogFoundByIdEvent;
use App\Containers\AppSection\Blog\Models\Blog;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindBlogByIdTask extends ParentTask
{
    public function __construct(
        protected BlogRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Blog
    {
        try {
            $blog = $this->repository->find($id);
            BlogFoundByIdEvent::dispatch($blog);

            return $blog;
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
