<?php

namespace App\Containers\AppSection\Blog\UI\WEB\Controllers;

use App\Containers\AppSection\Blog\Actions\CreateBlogAction;
use App\Containers\AppSection\Blog\UI\WEB\Requests\CreateBlogRequest;
use App\Containers\AppSection\Blog\UI\WEB\Requests\StoreBlogRequest;
use App\Ship\Parents\Controllers\WebController;

class CreateBlogController extends WebController
{
    public function create(CreateBlogRequest $request)
    {
        // ..
    }

    public function store(StoreBlogRequest $request)
    {
        $blog = app(CreateBlogAction::class)->run($request);
        // ..
    }
}
