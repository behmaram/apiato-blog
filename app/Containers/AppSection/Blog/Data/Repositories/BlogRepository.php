<?php

namespace App\Containers\AppSection\Blog\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class BlogRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
