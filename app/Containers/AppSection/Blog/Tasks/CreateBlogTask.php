<?php

namespace App\Containers\AppSection\Blog\Tasks;

use App\Containers\AppSection\Blog\Data\Repositories\BlogRepository;
use App\Containers\AppSection\Blog\Events\BlogCreatedEvent;
use App\Containers\AppSection\Blog\Models\Blog;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateBlogTask extends ParentTask
{
    public function __construct(
        protected BlogRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Blog
    {
        try {
            $blog = $this->repository->create($data);
            BlogCreatedEvent::dispatch($blog);

            return $blog;
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
