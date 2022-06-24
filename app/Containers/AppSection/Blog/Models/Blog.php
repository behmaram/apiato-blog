<?php

namespace App\Containers\AppSection\Blog\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Blog extends ParentModel
{
    protected $fillable = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Blog';
}
